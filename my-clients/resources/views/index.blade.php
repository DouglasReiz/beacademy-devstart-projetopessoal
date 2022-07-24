@extends('template.users')
@section('title', 'Home')
@section('body')

<div class="container">
    
    <h1>Olá Bem vindo</h1>

    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Vamos direto ao ponto, veja seus clientes.</p>

        <a href="{{ route('clients.showEach', Auth::user()->id) }}" class="btn btn-outline-dark">Meus Clientes</a>
    </div>

</div>



@endsection