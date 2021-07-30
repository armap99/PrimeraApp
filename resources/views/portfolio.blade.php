@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>
    <a href="{{ route('portfolio.create')}}">Crear proyecto</a>
    <ul> 
        @forelse ($portfolio as $portfolioItem) 
            <li><a href="{{ route('portfolio.show',$portfolioItem)}}"> {{$portfolioItem->title}} </a></li>
        @empty
            <li>No hay proyectos</li>
        @endforelse
        
    </ul>
    

@endsection