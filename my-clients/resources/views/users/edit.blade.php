@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-edit">

    <div class="container">
        <h1>Usuário {{$user->name}}</h1>
    
        <form class="form-edit" action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
    
        <div class="input-group">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"> 
        </div>
    
        <div class="input-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
    
        <div class="input-group">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
    
        <div class="input-group">
          <label for="image" class="form-label-image">selecione uma imagem</label>
          <input type="file" class="form-image" id="image" name="image">
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="admin" id="admin" name="admin">
          <label class="form-check-label" for="flexCheckDefault">
            Adminstrador
          </label>
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

    </div>

</div>