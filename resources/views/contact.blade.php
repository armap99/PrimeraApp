@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>
    <form method="POST" action="{{ route('contact') }}">
        @csrf <!-- Proteger los fromularios -->
        <input type="text" name="name" placeholder="Nombre..." value="{{old('name')}}"><br>
        {!!$errors-> first('name', '<small>:message</small><br>') !!} <!-- los dos !! son para poder imprimir html-->
        
        <input type="email" name="email" placeholder="Email ..." value="{{old('email')}}"><br>
        {!!$errors-> first('email', '<small>:message</small><br>') !!} 

        <input type="text" name="subject" placeholder="Asunto ..." value="{{old('subject')}}"><br>
        {!!$errors-> first('subject', '<small>:message</small><br>') !!} 

        <textarea type="text" name="content" placeholder="Mensaje ..." >{{old('content')}}</textarea><br>
        {!!$errors-> first('content', '<small>:message</small><br>') !!} 

        <button>Enviar</button>
    </form>
@endsection