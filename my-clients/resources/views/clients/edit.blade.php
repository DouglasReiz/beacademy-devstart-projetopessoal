@extends('template.users')
@section('title', $title)
@section('body')

<div class="s-edit">

    <div class="container mt-4 pb-5">

        <div class="title-edit">
            <h1>Usuário {{$client->name}}</h1>
        </div>

    
        <form class="form-edit" action="{{route('client.update', $client->id)}}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
    
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}"> 
        </div>
    
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">telefone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}"> 
        </div>

        <div class="mb-3">
          <label for="request" class="form-label">Pedido</label>
          <textarea type="text" class="form-control" id="request" name="request"> {{ $client->request }} </textarea>
        </div>

        <div class="mb-3">
          <label for="trademark" class="form-label">Marca</label>
          <input type="text" class="form-control" id="trademark" name="trademark" value="{{ $client->trademark }}"> 
        </div>
    
        <button type="submit" class="btn btn-primary mb-4">Enviar</button>
      </form>

    </div>

</div>

@endsection