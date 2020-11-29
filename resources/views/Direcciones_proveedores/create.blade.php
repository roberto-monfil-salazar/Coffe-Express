@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Nueva Direccion de Proveedores</h3>
        <a href="{{ route('Direcciones_proveedores.index')}}" class="btn btn-link ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{ route('Direcciones_proveedores.store')}}" method="POST" enctype="multipart/form-data" id="create">
        @include('Direcciones_proveedores.partials.form')
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