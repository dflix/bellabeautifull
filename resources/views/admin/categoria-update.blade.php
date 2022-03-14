@extends('template.template')

@section('title' , 'Criar Categorias')


@section('content')
<div class="container">
    <h3>Criar Categorias </h3>

   
    <form action="/categoria/atualizar/{{ $categoria->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form=group">
    <input type="text" name="category" value="{{ $categoria->category }}" class="form-control" />
    </div>
    <div class="form=group">
    <input type="submit"  class="btn btn-success" value="CADASTRAR"/>
    </div>
    
    </form>
</div>

@endsection