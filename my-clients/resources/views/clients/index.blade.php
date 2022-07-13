@extends('template.users')
@section('title', 'Listagem de clientes')
@section('body')

<div class="s-client">
    <div class="container">
        <div class="title-box">
            <h1>Listagem de Clientes</h1>

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