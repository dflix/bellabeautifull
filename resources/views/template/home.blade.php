@extends('template.template')

@section('title' , 'Bella Beautiful Produtos Exclusivos')


@section('content')

<main class="container-fluid">

    <section class="container">

        <div class="col-md-12">
            <h1>Buscar</h1>
            <form action="">
                <input type="text" id="search" name="search" class="form-control" />

            </form>
            @if($busca != '')
       <p> Sua buca por <b> {{ $busca }} </b> retornou seguintes resultados </p>
            @endif
        </div>

        <div class="col-md-12">
            <div class="row">

            @foreach($produto as $valor)
                <div class="card" >
                    <img src="/image/events/{{$valor->imagem}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$valor->product}}</h5>
                        <p class="card-text">{{$valor->short_description}}</p>
                        <a href="{{$valor->link}}" target="_blank" class="btn btn-warning">Saber Mais</a>
                        <p><a href="/produto/{{$valor->slug}}" target="_blank">Página</a></p>
                    </div>
                </div>
            @endforeach
               
                
           
            </div>
        </div>


    </section>


</main>



@endsection