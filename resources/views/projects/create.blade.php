@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>

    @include('partials.errors')

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        @include('projects.form',['btnText' => 'Guardar'])
        
    </form>
@endsection