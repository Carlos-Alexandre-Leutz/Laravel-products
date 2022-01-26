@extends('layouts.main')

@section('title' , ' Testes')

@section('main')

<form action="/event/img" method="post" enctype="multipart/form-data">
  <!-- enctype="multipart/form-data" e necesario para enviar arquivos no formulario -->
  @csrf

  <input type="file" placeholder="imagem" name="imagem">
  <button type="submit">Salvar</button>
</form>

  
  @foreach($imagens as $imagem)
  
 
   <img src="/img/downloads/{{$imagens->imagem}}" alt="">
  @endforeach




@endsection