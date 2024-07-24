    <label> Nombre: </label>
    <br>
    <input type="text" name="nombre" value="{{ isset($libro->nombre)?$libro->nombre:old('nombre') }}" >
    <br>
    <br>
    <label> Url: </label>
    <br>
    <input type="text" name="url" value="{{ isset($libro->url)?$libro->url:old('url') }}">
    <br>
    <br>
    <label> Imagen: </label>
    @if(isset($libro->imagen))
    <br>
    <img src="{{ asset('storage/'.$libro->imagen)}}" alt="" width="150">
    <br>
    @endif
    <br>
    <input type="file" name="imagen">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="{{ $modo }}">
    <a href="{{ route('libro.index') }}" class="btn btn-primary">Volver</a>