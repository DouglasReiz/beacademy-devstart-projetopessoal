@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-edit">

    <div class="container">

        <div class="title-edit">
            <h1>Usuário {{$client->name}}</h1>
        </div>

    
        <form class="form-edit" action="{{route('client.update', $client->id)}}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
    
        <div class="input-group">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}"> 
        </div>
    
        <div class="input-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
        </div>

        <div class="input-group">
          <label for="phone" class="form-label">telefone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}"> 
        </div>

        <div class="input-group">
          <label for="request" class="form-label">Pedido</label>
          <input type="text" class="form-control" id="request" name="request" value="{{ $client->request }}"> 
        </div>

        <div class="input-group">
          <label for="trademark" class="form-label">Pedido</label>
          <input type="text" class="form-control" id="trademark" name="trademark" value="{{ $client->trademark }}"> 
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

    </div>

</div>