@extends('template.template')

@section('title' , 'Criar Categorias')


@section('content')


       <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

<section class="container">
    <h3>Atualizar Produtos</h3>
    <form method="POST" action="/produtos/atualizar/{{$produto->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form group">
        <label for="imagem">Imagem do Produto</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <div class="form group">
        <label >Categoria</label>
        <select class="form-control" name="category">
        <option value="{{$produto->category}}">{{$produto->category}}</option>
        @foreach($categoria as $value)
      <option value="{{ $value->slug }}"> {{ $value->category }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Produto</label>
        <input type="text" name="product" value="{{$produto->product}}" class="form-control" />
    </div>
    
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="{{$produto->title}}" class="form-control" />
    </div>
        
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" value="{{$produto->description}}" class="form-control" />
    </div>

    <div class="form group">
        <label for="title">Descrição Curta</label>
        <textarea name="short_description"  class="form-control" placeholder="Descrição curta do Produto">
        value="{{$produto->short_description}}"
        </textarea>
    </div>

    <div class="form-group">
        <label>Link do Botão</label>
        <input type="text" name="link" value="{{$produto->link}}" class="form-control" />
    </div>

    
    <div class="form-group">
        <label>Pagina de Vendas</label>
        <input type="text" name="content" value="{{$produto->content}}" class="form-control" />
        <input type="hidden" name="id" value="{{$produto->id}}"  />
    </div>

    
    <div class="form-group">
       
        <input type="submit" value="cadastrar"  class="btn btn-success" />
    </div>

    </form>
</section>

@endsection