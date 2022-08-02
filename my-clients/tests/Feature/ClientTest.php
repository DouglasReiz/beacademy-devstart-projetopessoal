<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Clients;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_client()
    {
        $user = User::factory()->create();
        $response = $this ->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->actingAs($user);
        
        $response = $this->get('/clients');

        $response->assertStatus(200);
    }

    public function test_user_can_create_client()
    {
        $user = User::factory()->create([
            'is_admin' => 1
        ]);
        
        $response = $this->actingAs($user)->post('/clients', [
            'user_id'=> Auth::user()->id,
            'name' => 'Josefo',
            'email' => 'josefinho@email',
            'phone' => '22999887765',
            'request' => 'perfume 015',
            'trademark' => 'Avon',
        ]);
        
        $this->actingAs($user);

        $response = $this->get('/clients');

        $response->assertStatus(200);
    }

    public function test_user_can_show_client()
    {
        $user = User::factory()->create([
            'is_admin' => 1
        ]);

        $client = Clients::factory()->create([
            'user_id' => $user->id
        ]);

        $response = $this->actingAs($user)->get('/clients/'.$client->id);

        $response->assertStatus(200);
    }

    public function test_user_can_show_my_client()
    {
        $user = User::factory()->create([
            'is_admin' => 1
        ]);

        $client = Clients::factory()->create([
            'user_id' => $user->id
        ]);

        $response = $this->actingAs($user)->get("users/{$user->id}/clients/");

        $response->assertStatus(200);
    }

    public function test_user_can_delete_client()
    {
        $user = User::factory()->create([
            'is_admin' => 1
        ]);

        $client = Clients::factory()->create([
            'user_id' => $user->id
        ]);

        $response = $this->actingAs($user)->delete('/clients/'.$client->id);

        $response = $this->actingAs($user)
                ->get('/home');


        $response->assertStatus(200);
    }
}
