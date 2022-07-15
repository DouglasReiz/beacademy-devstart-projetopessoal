@extends('template.users')
@section('title', 'Login')
@section('body')

<div class="s-login">

    <div class="container">
        
        <div class="title-login">
            <h1>Login</h1>
        </div>

        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email input -->
            <div class="input-group">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" name="email" />
            </div>
    
            <!-- Password input -->
            <div class="input-group">
                <label class="form-label" for="form2Example2">Senha</label>
                <input type="password" id="form2Example2" class="form-control" name="password"/>
            </div>
            <div class="input-button">
                <!-- Simple link -->
                <a href="{{ route('password.request') }}" class="btn-primary empty">Esqueceu a Senha?</a>
                
                <!-- Submit button -->
                <button type="submit" class="btn-primary">Entrar</button>
            </div>

        </form>
    </div>

</div>


@endsection