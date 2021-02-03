@extends('layouts.plantilla')
@section('title' , 'Index')
@section('content')
<h1 class="text-center">Bienvenido a la página principal de cursos</h1>
<a href="{{route('cursos.create')}}">Crear curso</a>
<ul>
    @foreach($cursos as $item)
        <li> <a href="{{route('cursos.show',$item->id)}}">{{$item->name}}</a></li>
    @endforeach
</ul>

{{$cursos->links()}}
@endsection
