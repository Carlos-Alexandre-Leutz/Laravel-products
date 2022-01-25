
@extends('layouts.main')

@section('title' , ' Busca')

@section('main')
 @if($busca !=  '')
   Usuario buscando por: {{ $busca }}
@endif
@endsection