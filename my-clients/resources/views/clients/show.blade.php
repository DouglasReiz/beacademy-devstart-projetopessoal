@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-hero">
    <div class="container">
        <div class="title-box">
            <h1>{{$client->name }}</h1>
            
        </div>
        
        <div class="table">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone</th>
                        <th scope="col">request</th>
                        <th scope="col">trademark</th>
                        <th scope="col">Data Cadastro</th>
                        <th scope="col">Ações</th>
                        <th scope="col"></th>
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
                            <a href="{{ route('clients.edit', $client->id)}}" class="btn btn-warning">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('clients.delete', $client->id) }}" method="Post">
                                @method('DELETE')
                                @csrf
    
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection