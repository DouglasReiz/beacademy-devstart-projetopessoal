@extends('template.users')
@section('title', $title)
@section('body')




    <div class="container p-5">
        <div class="mb-4">
            <h1>Usuário {{$user->name }}</h1>
            
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
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"> {{ $user->id }} </th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($user->created_at)) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('users.delete', $user->id) }}" method="Post">
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


@endsection