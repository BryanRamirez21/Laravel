@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')
<h1>Pagina para crear curso</h1>
<form action="{{ route('cursos.store') }}" method="POST">

    @csrf

    <label>Name: <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
    <br><small>*{{$message}}</small>
    @enderror
    <br>
    <label>description:<br> 
        <textarea name="description" rows="5">{{old('description')}}</textarea>
    </label>
    @error('description')
    <br><small>*{{$message}}</small>
    @enderror
    <br>
    <label>Category: <br>
        <input type="text" name="category" value="{{old('category')}}">
    </label>
    @error('category')
    <br><small>*{{$message}}</small>
    @enderror
    <br>

    <button type="submit">Subir info</button>
</form>
@endsection
