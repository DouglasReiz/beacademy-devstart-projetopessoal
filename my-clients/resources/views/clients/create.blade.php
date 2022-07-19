@extends('template.users')
@section('title', 'Novo Cliente')
@section('body')

  <div class="container mt-4">
    <div class="title-create">
      <h1>Novo Cliente</h1>
    </div>
        
    <form class="form-create" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
    
      @csrf
    
      <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome"> 
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Telefone</label>
        <input type="phone" class="form-control" id="phone" name="phone">
      </div>

      <div class="mb-3">
        <label for="request" class="form-label">Pedido</label>
        <textarea style="height: 100px" type="text" class="form-control" id="request" name="request"></textarea>
      </div>
      
      <div class="mb-3">
        <label for="trademark" class="form-label">Marca</label>
        <input type="text" class="form-control" id="trademark" name="trademark">
      </div>
      
      <div class="mb-3">
        <label for="image" class="form-label">selecione uma imagem</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      
      <button type="submit" class="btn btn-primary mb-4">Enviar</button>
    </form>
        
        
  </div>
    
@endsection