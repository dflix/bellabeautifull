
@foreach($produtos as $valor)
 
@endforeach

@php

$pagina = file_get_contents("{$valor->content}");

echo $pagina;

@endphp