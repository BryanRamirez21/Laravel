@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
<h1>Pagina para editar curso</h1>
<form action="{{ route('cursos.update', $curso) }}" method="post">

    @csrf
    @method('put')

    <label>Name: <br>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label>
    @error('name')
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label>description:<br> 
        <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
    </label>
    @error('description')
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label>Category: <br>
        <input type="text" name="category" value="{{old('category', $curso->category)}}">
    </label>
    @error('category')
        <small>*{{$message}}</small>
    @enderror
    <br>

    <button type="submit">Actualizar info</button>
</form>
@endsection
