@extends('layouts.plantilla')

@section('title' , 'Home')

@section('content')
<div class="container ">
    <h1 class="text-center">Bienvenido a la página principal</h1>
    <center><a  class="btn btn-warning" href="{{route('cursos.index')}}">Ver cursos</a></center>
</div>
@endsection
