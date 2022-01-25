
@extends('layouts.main')

@section('title' , ' Testes')

@section('main')
 @if($id !=  null)
    {{ $id }}
@endif
@endsection