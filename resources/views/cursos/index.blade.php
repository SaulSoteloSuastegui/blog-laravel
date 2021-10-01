@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<h1>Bienvenido a la página cursos sdsd</h1>

    <a href="{{route('cursos.create')}}">Crear un curso</a>
    <ul>
        @foreach ($cursos as $curso)
        <li>
            <a href="{{route('cursos.show', $curso->id)}}"> {{$curso->name}}</a>
        </li>
            @endforeach
    </ul>

    {{$cursos->links()}}
@endsection

