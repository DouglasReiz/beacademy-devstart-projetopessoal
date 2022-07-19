@extends('template.users')
@section('title', 'Listagem de clientes')
@section('body')


<div class="s-client">
    <div class="container">
        <div class="title-box">
            <h1>Listagem de Clientes</h1>
        </div>
        
        @if(session()->has('create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Atenção</strong> {{ session()->get('create') }}.
                <button class="closebtn" onclick="this.parentElement.style.display='none';">&times;</button>
            </div>
        @endif

        @if(session()->has('update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Atenção</strong> {{ session()->get('update') }}.
                <a class="closebtn" onclick="this.parentElement.style.display='none';">&times;</a>
            </div>
        @endif
        

        <div class="create-client">
            <a href="{{ route('clients.create') }}" class="btn btn-success mb-3">Novo cliente</a>
        </div>

        <div class="table">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data Cadastro</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{ $client->id }}</th>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($client->created_at)) }}</td>
                        <td>
                           <a href="{{ route('clients.show', $client->id)}}" class="btn btn-primary">Visualizar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$clients->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection