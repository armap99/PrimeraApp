@extends('layout')

@section('title','Editar Proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
        
    @endif

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label >
            Titulo del proyecto <br>
            <input type="text" name="title" id="">
        </label>
        <br>
        <label >
            Descripcion del proyecto <br>
            <textarea  name="description" id=""></textarea>
        </label>
        <br>
        <label >
            URL del proyecto <br>
            <input type="text" name="url" id="">
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection