@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Telefonos de los usuarios</h3>
        <a href="{{ route('Telefonos_usuarios.index')}}" class="btn btn-link ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{ route('Telefonos_usuarios.store')}}" method="POST" enctype="multipart/form-data" id="create">
        @include('Telefonos_usuarios.partials.form')
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