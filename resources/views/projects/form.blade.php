@csrf 
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
<button>{{$btnText}}</button>