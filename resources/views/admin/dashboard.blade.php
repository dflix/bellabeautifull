@extends('template.template')

@section('title' , 'Area Administrativa')


@section('content')

<section class="container">
    <h3>Dashboard </h3>
    <p>Seja bem vindo {{ Auth::user()->name }}</p>
</section>

@endsection