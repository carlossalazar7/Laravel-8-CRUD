@extends('layouts.plantilla')
@section('title' , 'Cursos edit')
@section('content')
<h1 class="text-center">En esta página podras editar un curso</h1>
<div class="w-50 mx-auto">
    <form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('put')
     <label for="">Nombre <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
    </label>
    @error('name')
    <br><small>{{$message}}</small>    
    @enderror
    <br>
    <label for="">
        Descripción:<br>
        <textarea name="descripcion" id="" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
    </label>
    @error('descripcion')
    <br><small>{{$message}}</small>    
    @enderror<br>
    <label for="">
    Categoria: <br>
        <input type="text" name="categoria"  value="{{old('categoria', $curso->categoria)}}">
    </label>
    @error('categoria')
    <br><small>{{$message}}</small>    
    @enderror
    <br>
    <button class="btn btn-success" type="submit">Actualizar datos</button>
</form>

</div>
@endsection
