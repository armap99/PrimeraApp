@extends('layout')

@section('title','Portafolio | ' . $projecto->title)

@section('content')
    <h1>{{ $projecto->title }} </h1> 
    <a href="{{ route('portfolio.edit',$projecto) }}">Editar</a>
    <p>{{ $projecto->description }}</p> 
    <p>{{ $projecto->created_at->diffForHumans()}}</p>

@endsection