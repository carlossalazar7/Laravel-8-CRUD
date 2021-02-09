@extends('layouts.plantilla')

@section('title' , 'Curso: '. $curso->name.'')

@section('content')
    <div class="container w-50">
        <h1 class="text-center">Bienvenido al curso: <strong>{{$curso->name}}</strong></h1> <br>
        <button class="btn btn-primary"><a href="{{route('cursos.edit', $curso)}}">Editar Curso</a></button>
        <button class="btn btn-success"><a href="{{route('cursos.index')}}">Volver a cursos</a></button>
        <br><br>
        <p><strong class="bg-light">Categoria: </strong>{{$curso->categoria}}</p>
        <p><strong class="bg-light">Descripción: </strong>{{$curso->descripcion}}</p>
    </div>
@endsection