@extends('template.users')
@section('title', 'Login')
@section('body')

<div class="s-register">
    
    <div class="container">
        <div class="title-register">
            <h1>Registre-Se</h1>
        </div>
    
        <form class="form-register" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name input -->
            <div class="input-group ">
                <label class="form-label" for="name">Nome</label>
                <input type="text" id="name" class="form-control" name="name" />
            </div>
            <!-- Email input -->
            <div class="input-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" />
            </div>

            <!-- Password input -->
            <div class="input-group">
                <label class="form-label" for="password">Senha</label>
                <input type="password" id="password" class="form-control" name="password"/>
            </div>
            <!-- Confirm Password input -->
            <div class="input-group">
                <label class="form-label" for="password_confirmation">Confirme a Senha</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required/>
            </div>

            <div class="input-group">
                <label for="image" class="form-label-image">selecione uma imagem</label>
                <input type="file" class="form-image" id="image" name="image">
            </div>

            <!-- Submit button -->
            <div class="input-button">
                <button type="submit" class="btn-primary">Registrar</button>
            </div>
        </form>
    </div>

</div>

@endsection