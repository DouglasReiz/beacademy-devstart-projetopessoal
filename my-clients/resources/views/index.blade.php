@extends('template.users')
@section('title', 'Home')
@section('body')

<div class="container">
    
    <h1 class="text-center my-4">Olá Bem vindo</h1>

    <div class="col-lg-6 mx-auto my-4 text-center">
        <p class="lead mb-4">Escolha uma das opções abaixo</p>

        <a href="{{ route('clients.showEach', Auth::user()->id) }}" class="btn btn-outline-dark">Meus Clientes {{Auth::user()->clients->count()}}</a>

        <a href="{{ route('clients.create') }}" class="btn btn-outline-success">Novo cliente</a>
    </div>

</div>



@endsection