@extends('template.users')
@section('title', 'Novo Cliente')
@section('body')


<div class="s-create-client">
  
  
  <div class="container">
    <div class="title-create">
      <h1>Novo Cliente</h1>
    </div>
        
    <form class="form-create" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
    
      @csrf
    
      <div class="input-group">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome"> 
      </div>
      
      <div class="input-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="input-group">
        <label for="phone" class="form-label">Telefone</label>
        <input type="phone" class="form-control" id="phone" name="phone">
      </div>

      <div class="input-group">
        <label for="request" class="form-label">Pedido</label>
        <textarea rows="10" type="text" class="form-control" id="request" name="request"></textarea>
      </div>
      
      <div class="input-group">
        <label for="trademark" class="form-label">Marca</label>
        <input type="text" class="form-control" id="trademark" name="trademark">
      </div>
      
      <div class="input-group">
        <label for="image" class="form-label-image">selecione uma imagem</label>
        <input type="file" class="form-image" id="image" name="image">
      </div>
      
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
        
        
  </div>
      
</div>
    
@endsection