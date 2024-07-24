@extends('layouts.app')

@section('content')

<div class="container">

    @if(count($errors)>0)

    <div
        class="alert alert-danger alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    
        <strong>Errores: </strong>

        
            <br>
            @foreach($errors->all() as $error)
            -{{ $error }} <br/>
            @endforeach
            
    </div>
    @endif



    <div class="card">
        <div class="card-header">Crear Libro</div>
        <div class="card-body">
            
            <form action="{{ url('/libro') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('libro.form',['modo'=>'Crear informacion'])
            </form>

        </div>
        <div class="card-footer text-muted"></div>
    </div>
    


</div>
@endsection