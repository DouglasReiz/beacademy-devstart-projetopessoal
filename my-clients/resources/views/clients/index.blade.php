@extends('template.users')
@section('title', 'Listagem de clientes')
@section('body')


<div class="s-client">
    <div class="container">
        <div class="title-box">
            <h1>Listagem de Clientes</h1>
        </div>
        
        @if(session()->has('create'))
            <div class="alert">
                <strong>Atenção</strong> {{ session()->get('create') }}.
                <button class="closebtn" onclick="this.parentElement.style.display='none';">&times;</button>
            </div>
        @endif

        @if(session()->has('update'))
            <div class="alert">
                <strong>Atenção</strong> {{ session()->get('update') }}.
                <a class="closebtn" onclick="this.parentElement.style.display='none';">&times;</a>
            </div>
        @endif
        
        <div class="create-client">
            <a href="{{ route('clients.create') }}" class="btn-primary">Novo cliente</a>
        </div>

        <div class="table">
            <table class="t-clients">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data Cadastro</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th>{{ $client->id }}</th>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($client->created_at)) }}</td>
                        <td>
                           <a href="{{ route('clients.show', $client->id)}}" class="btn-primary">Visualizar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection