@extends('template.template')

@section('title' , 'Capturar Whatsapp')


@section('content')
<section class="container">

    <h3>Capturar Whatsapp</h3>
<p>Exemplo de busca Google</p>
<p>site:www.facebook.com + "Ana Cristina" + whatsapp + "(11)"</p>

    <form method="POST" action="/marketing/store">
     @csrf
     <div class="form-group">
         <label>Textos de Captura (conteúdo Google)</label>
         <textarea class="form-control" name="capturas">

         </textarea>
     </div>
     <div class="row">
         <div class="col-6">
             <label>DDD</label>
             <input type="text" class="form-control" name="ddd" />
         </div>
         <div class="col-6">
             <label>Termo Busca</label>
             <input type="text" class="form-control" name="termo" />
         </div>
     </div>
     <div class="form-group">
         <input type="submit" class="btn btn-success" value="CAPTURAR" />
     </div>

    </form>


    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Status</th>
                <th>Ordem</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dados as $valor)
            <tr>
                <td>{{$valor->name}}</td>
                <td>{{$valor->whatsapp}}</td>
                <td>{{$valor->status}}</td>
                <td>{{$valor->order}}</td>
            </tr>
            @endforeach
       
        </tbody>

    </table>
    {{ $dados->links() }}
</section>

@endsection