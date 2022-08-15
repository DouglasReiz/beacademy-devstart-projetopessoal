@extends('template.users')
@section('title', 'Login')
@section('body')

<div class="s-register py-5">
    
    <div class="container mx-5">
        <div class="title-register mb-5">
            <h1>Registre-Se</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form class="form-register" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Nome</label>
                <input type="text" id="name" class="form-control" name="name" />
            </div>
            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" />
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label class="form-label" for="password">Senha</label>
                <input type="password" id="password" class="form-control" name="password"/>
                <label class="form-label" for="password">A senha deve conter no mínimo 8 caractéres.</label>
            </div>
            <!-- Confirm Password input -->
            <div class="mb-3">
                <label class="form-label" for="password_confirmation">Confirme a Senha</label>
                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required/>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">selecione uma imagem</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Submit button -->
            <div class="mb-5">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>

</div>

@endsection