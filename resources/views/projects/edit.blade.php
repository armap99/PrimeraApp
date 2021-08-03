@extends('layout')

@section('title','Editar Proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @include('partials.errors')

    <form method="POST" action="{{ route('portfolio.update',$projecto) }}">
        @method('PATCH')
        @include('projects.form',['btnText' => 'Editar'])
        
    </form>
@endsection