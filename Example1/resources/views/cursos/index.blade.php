@extends('layouts.plantilla')
@section('title' , 'Index')
@section('content')

<div class="container w-50">
    <h1 class="text-center uppercase">Bienvenido a la página principal de cursos</h1>
    <br>
    <a class="btn btn-primary" href="{{route('cursos.create')}}">Crear curso</a>
    <br>
    <ul>
        @foreach($cursos as $item)
            <li class="bg-light p-1"> <a href="{{route('cursos.show',$item->id)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>   
{{$cursos->links()}}
</div>

@endsection
