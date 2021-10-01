@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<h1>Bienvenido al curso {{$curso->name}} </h1>

<a href="{{route('cursos.index')}}">Volver a curso</a>
<p><strong>Categoria:</strong>{{$curso->categoria}}</p>
<p>{{$curso->description}}</p>
@endsection


