@extends('template.template')

@section('title' , 'Criar Categorias')


@section('content')
<section class="container">
    <h3>Produtos</h3>

<table class="table">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Link</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        @foreach($produto as $valor)
        <tr>
            <td><img src="/image/events/{{$valor->imagem}}" width="150" /></td>
            <td>{{$valor->product}}</td>
            <td>{{$valor->short_description}}</td>
            <td>{{$valor->link}}</td>
            <td><a href="/produtos/update/{{$valor->id}}"><button class="btn btn-primary">Editar</button></a></td>
            <td><a href="/produtos/destroy/{{$valor->id}}"><button class="btn btn-danger">Deletar</button></a></td>
        </tr>
        @endforeach

    </tbody>
</table>

</section>

@endsection