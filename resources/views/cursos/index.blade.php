@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Pagina de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
               <a href="{{route('cursos.category', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection
