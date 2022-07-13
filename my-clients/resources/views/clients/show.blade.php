@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-hero">
    <div class="container">
        <div class="title-box">
            <h1>{{$client->name }}</h1>
            
        </div>
        
        <div class="table">
            <table class="t-users">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>request</th>
                        <th>trademark</th>
                        <th>Data Cadastro</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"> {{ $client->id }} </th>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->request }}</td>
                        <td>{{ $client->trademark }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($client->created_at)) }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client->id)}}" class="btn-primary">Editar</a>
                            <form action="{{ route('clients.delete', $client->id) }}" method="Post">
                                @method('DELETE')
                                @csrf
    
                                <button type="submit" class="btn-primary delete">Deletar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection