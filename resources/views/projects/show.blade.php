@extends('layout')

@section('title','Portafolio | ' . $projecto->title)

@section('content')
    <h1>{{ $projecto->title }} </h1> 
    <p>{{ $projecto->description }}</p> 
    <p>{{ $projecto->created_at->diffForHumans()}}</p>

@endsection