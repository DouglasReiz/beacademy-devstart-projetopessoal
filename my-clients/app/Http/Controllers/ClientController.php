<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateClientsFormRequest;
use App\Models\Clients;
use App\Models\User;

class ClientController extends Controller
{
    protected $user;
    protected $client;

    public function __construct(User $user, Clients $client)
    {
        $this->user = $user;
        $this->clients = $client;
    }


    public function home()
    {
        $user= User::all();

        $client= Clients::all();

        return view('index', compact('user', 'client'));
    }


    public function index()
    {
        $clients = Clients::all();

        return view('clients.index', compact('clients'));
    }

    public function show($id)
    {
        if(!$client = Clients::find($id))
            return redirect()->route('clients.show');

        $title = $client->name;
        
        return view('clients.show', compact('client', 'title'));
    }

    public function showMines($userId)
    {
        if(!$user = $this->user->find($userId)){
            return redirect()->back();
        }

        $clients = $user->clients()->get();
        
        return view('clients.showMineClients', compact( 'user','clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(StoreUpdateClientsFormRequest $request)
    {
        $data = $request->all();

        if($request ->image){
            $file = $request['image'];
            $path = $file->store('clients','public');
            $data['image'] = $path;
        }



        $this->clients->create($data);

        $request->session()->flash('create','cliente cadastrado com sucesso');


        return redirect()->route('clients.index')->with('create','cliente cadastrado com sucesso');
    }

    public function edit($id)
    {
        $client = Clients::find($id);

        $title = 'Cliente '. $client->name;

        return view('clients.edit', compact('client','title'));
    }

    public function update(StoreUpdateClientsFormRequest $request, $id){
        if(!$client = $this->model->find($id))
            return redirect()->route('clients.index');

        $data = $request->only('name','email');
        if($request->password)
            $data['password']=bcrypt($request->password);

        $client->update($data);
        
        $request->session()->flash('update','cliente atualizado com sucesso');

        return redirect()->route('clients.index')->with('update','cliente atualizado com sucesso');
    }

    
}
