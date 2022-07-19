@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<div class="s-hero">
    <div class="container">
        <div class="mb-5">
            <h1 class="">Listagem de Usuários</h1>

        </div>


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
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($user->created_at)) }}</td>
                        <td>
                           <a href="{{ route('users.show', $user->id)}}" class="btn btn-primary">Visualizar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
        {{$users->links('pagination::bootstrap-4')}}

    </div>
</div>
@endsection