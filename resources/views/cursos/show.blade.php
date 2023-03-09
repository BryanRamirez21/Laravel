@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('content')
    <h1>Bienvenido al {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">volver a cursos</a><br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Categoria: {{$curso->category}}</strong></p>
    <p>Descripción: {{$curso->description}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST"><!-- it is inside a forma cause html doesnt recognize the delete methos, only get and post, thats why its here and we use the 2 next lines !-->
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
