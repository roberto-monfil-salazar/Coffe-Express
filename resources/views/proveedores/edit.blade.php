@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Editar proveedores</h3>
        <a href="{{ route('proveedores.index')}}" class="btn btn-primary ml-auto">
         <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{ route('proveedores.update', $proveedores->ID_Proveedores)}}" method="POST" enctype="multipart/form-data" id="create">
        @method('PUT')
        @include('proveedores.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            <i class="fa fa-save"></i>
            Guardar cambios
        </button>
        <button class="btn btn-danger" form="delete_{{ $proveedores->ID_Proveedores}}" onclick="return confirm('¿Esta seguro de eliminar registro?')">
            <i class="fa fa-trash"></i>
            Eliminar
        </button>
        <form action="{{ route('proveedores.destroy', $proveedores->ID_Proveedores) }}" id="delete_{{$proveedores->ID_Proveedores}}" method="post" enctype="multipart/form-data" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection