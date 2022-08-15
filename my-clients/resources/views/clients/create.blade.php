@extends('template.users')
@section('title', 'Novo Cliente')
@section('body')




  <div class="container mt-4">
    <div class="title-create text-center">
      <h1>Novo Cliente</h1>
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
        
    <form class="form-create mt-3 px-5 pb-5" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
    
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

      <div class="mb-3">
        <label for="user_id" class="form-label">Pertence ao usuário</label>
        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
      </div>
      
      <button type="submit" class="btn btn-primary mb-4">Enviar</button>
    </form>
        
        
  </div>
    
@endsection