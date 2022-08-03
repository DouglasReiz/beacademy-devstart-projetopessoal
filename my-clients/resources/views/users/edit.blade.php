@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-edit">

    <div class="container my-3 pb-5">
        <h1>Usuário {{$user->name}}</h1>
    
        <form class="form-edit" action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
    
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"> 
        </div>
    
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
    
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
    
        <div class="mb-3">
          <label for="image" class="form-label">selecione uma imagem</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
        <input class="form-check-input" type="checkbox" value="admin" id="admin" name="admin">
          <label class="form-check-label" for="flexCheckDefault">
            Adminstrador
          </label>
        </div>
    
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
      </form>

    </div>

</div>

@endsection