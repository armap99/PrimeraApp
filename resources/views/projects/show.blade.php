@extends('layout')

@section('title','Portafolio | ' . $projecto->title)

@section('content')
    <h1>{{ $projecto->title }} </h1> 
    <a href="{{ route('portfolio.edit',$projecto) }}">Editar</a>
    <form action="{{route('portfolio.destroy',$projecto)}}" method="POST">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
    <p>{{ $projecto->description }}</p> 
    <p>{{ $projecto->created_at->diffForHumans()}}</p>

@endsection