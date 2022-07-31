@extends('template.users')
@section('title', 'Login')
@section('body')



    <div class="container mx-5">
        
        <div class="title">
            <h1>Login</h1>
        </div>

        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" name="email" />
            </div>
    
            <!-- Password input -->
            <div class="mb-3">
                <label class="form-label" for="form2Example2">Senha</label>
                <input type="password" id="form2Example2" class="form-control" name="password"/>
            </div>
            <div class="mb-3">
                <!-- Simple link -->
                <a href="{{ route('password.request') }}" class="btn btn-warning">Esqueceu a Senha?</a>
                
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>

        </form>
    </div>




@endsection