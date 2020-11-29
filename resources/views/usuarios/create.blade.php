@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Agregar Usuario</h3>
        <a href="{{ route('usuarios.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{ route('usuarios.store')}}" method="POST" enctype="multipart/form-data" id="create">
        @include('usuarios.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            <i class="fa fa-plus"></i>
            Crear
        </button>
    </div>
</div>
@endsection