<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->create();
        $response = $this ->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->actingAs($user);
        
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {
        $user = User::factory()->create();
        
        $response = $this->post('/users', [
            $user -> name     => 'Admin',
            $user -> email    => 'admin@master.com',
            $user -> password => '1q2w3e4r',
            $user -> is_admin => 1
        ]);
        
        $this->actingAs($user);

        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_update_user()
    {
        $user = User::factory()->create();
        
        $response = $this->put('/users/{id}', [
            $user -> name     => 'Admin jr',
            $user -> email    => 'admin@master.com.br',
            $user -> password => '1q2w3e4r',
            $user -> is_admin => 1
        ]);
        
        $this->actingAs($user);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_show_user()
    {
        $user = User::factory()->create();
        
        $response = $this->put('/users/{id}', [
            $user -> name     => 'Admin jr',
            $user -> email    => 'admin@master.com.br',
            $user -> password => '1q2w3e4r',
            $user -> is_admin => 1
        ]);
        
        $this->actingAs($user)
            ->get('/users/show');

        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
