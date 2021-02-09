@extends('layouts.plantilla')
@section('title' , 'Crear curso')
@section('content')
<h1 class="text-center">En esta página podras crear un curso</h1>
<div class="w-50 mx-auto">
    <form action="{{route('cursos.store')}}" method="POST">
    @csrf
     <label for="">Nombre <br>
            <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
    <br>
    <small>* {{$message}}</small>        
    @enderror
    <br>
    <label for="">
        Descripción: 
        <br>
        <textarea name="descripcion" id="" rows="5">{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
    <br>
    <small>* {{$message}}</small>        
    @enderror
    <br>
    <label for="">
    Categoria: <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>
    @error('categoria')
    <br>
    <small>* {{$message}}</small>        
    @enderror
    <br>
    <button type="submit">Enviar</button>
</form>

</div>
@endsection
