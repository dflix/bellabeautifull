@extends('template.template')

@section('title' , 'Categorias')


@section('content')
<section class="container">

<h3>Categorias</h3>

<table class="table">
    <thead>
        <tr>
            <th>Categoria</th>
            <th>Slug</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
    @foreach($categoria as $value)
        <tr>
            <td>{{ $value->category }}</td>
            <td>{{ $value->slug }}</td>
            <td><a href="/categoria/update/{{ $value->id }}"> <button class="btn btn-info btn-sm">Editar</button></a></td>
            <td><a href="/categoria/delete/{{ $value->id }}"> <button class="btn btn-danger btn-sm">Deletar</button></a></td>
        </tr>
        @endforeach
       
    </tbody>
</table>
</section>

@endsection