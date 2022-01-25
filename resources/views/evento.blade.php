
@extends('layouts.main')

@section('title' , ' Testes')

@section('main')
 
<form action="/event" method="post">
  @csrf
  <input type="text" placeholder="titulo" name="titulo">
  <input type="text" placeholder="descrição" name="Descricao">
  <input type="number" placeholder="confirmado" name="confirmado">
  <button type="submit">Salvar</button>
</form>

  @foreach($nome as $nome)
  <p>{{ $nome->titulo }}</p>
  <p>{{ $nome->confirmado }}</p>
  <p>{{ $nome->Descricao }}</p>
  @endforeach
 

@endsection
<script>
  // let data = $nome;
  // console.log(data)
</script>