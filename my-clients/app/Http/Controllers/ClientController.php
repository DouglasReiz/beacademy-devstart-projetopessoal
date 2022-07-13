<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\StoreUpdateClientsFormRequest;

class ClientController extends Controller
{
    public function __construct(Client $client)
    {
        $this->model = $client;
    }


    public function index()
    {
        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }

    public function show($id)
    {
        if(!$client = Client::find($id))
            return redirect()->route('clients.show');

        $title = $client->name;
        
        return view('clients.show', compact('client', 'title'));
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
            $path = $file->store('profile','public');
            $data['image'] = $path;
        }

        $this ->model->create($data);

        //$request->session()->flash('create','usuario cadastrado com sucesso');

        return redirect()->route('clients.index') ;
    }
}
