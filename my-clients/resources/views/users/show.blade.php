@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-hero">
    <div class="container">
        <div class="title-box">
            <h1>Usuário {{$user->name }}</h1>
            
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
                    <tr>
                    <th scope="row"> {{ $user->id }} </th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/y - H:i', strtotime($user->created_at)) }}</td>
                        <td>
                            <button href="" class="btn-primary"> Editar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection