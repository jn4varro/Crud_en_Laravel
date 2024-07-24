@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('mensaje'))

<div
    class="alert alert-success alert-dismissible fade show"
    role="alert"
>
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>

    <strong>Mensaje: </strong>{{ Session::get('mensaje') }}
</div>
@endif
<br>

<div class="card">
    <div class="card-header"> 
        <a href="{{ route('libro.create') }}" class="btn btn-success">Subir un libro</a></div>
    <div class="card-body">

        
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">URL</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr class="">
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->nombre }}</td>
                <td>
                    <a href="{{ $libro->url }}" target="_blank" >{{ $libro->url }}</a>
                </td>



                <td><img class="img-fluid img-thumbnail" src="{{ asset('storage/'.$libro->imagen)}}" alt="" width="90"></td>
                <td>
                    <a href="{{ route('libro.edit', $libro->id) }}" class="btn btn-warning">Editar</a>
                    |

                    <form class="d-inline" action="{{ route('libro.destroy', $libro->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

        
    </div>

    <div>{!! $libros->links() !!}</div>

    <div class="card-footer text-muted"></div>
</div>



</div>
@endsection