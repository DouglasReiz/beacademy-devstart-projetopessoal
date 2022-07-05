@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<div class="s-hero">
    <div class="container">
        <div class="title-box">
            <h1>Listagem de Usuários</h1>

        </div>

        <div class="table">
            <table class="t-users">
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
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($user->created_at)) }}</td>
                        <td>
                           <a href="{{ route('users.show', $user->id)}}" class="btn-primary">Visualizar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection