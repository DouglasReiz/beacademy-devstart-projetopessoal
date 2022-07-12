<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller
{

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if(!$user = User::find($id))
            return redirect() ->route('users.index');

        $title = 'Usuário '. $user->name;
        
        return view('users.show', compact('user','title'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        $title = 'Usuario '. $user->name;

        return view('users.edit', compact('user','title'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id){
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->only('name','email');
        if($request->password)
            $data['password']=bcrypt($request->password);

        $user->update($data);
        
        return redirect()->route('users.index');
    }
}
