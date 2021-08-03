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

    <form method="POST" action="{{ route('portfolio.update',$projecto) }}">
        @csrf @method('PATCH')
        <label >
            Titulo del proyecto <br>
            <input type="text" name="title" id="" value="{{ old('title',$projecto->title)}}"><!-- Para mantener lo que escribe aunque falle la validacion-->
        </label>
        <br>
        <label >
            Descripcion del proyecto <br>
            <textarea  name="description" id="">{{ old('description',$projecto->description)}}</textarea>
        </label>
        <br>
        <label >
            URL del proyecto <br>
            <input type="text" name="url" id="" value="{{ old('url',$projecto->url)}}">
        </label>
        <br>
        <button>Editar</button>
    </form>
@endsection