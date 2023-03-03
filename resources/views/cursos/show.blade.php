@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('content')
    <h1>Bienvenido al {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">volver a cursos</a><br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Categoria: {{$curso->category}}</strong></p>
    <p>Descripción: {{$curso->description}}</p>
@endsection
