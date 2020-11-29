@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Editar Categorias</h3>
        <a href="{{ route('categorias_pro.index')}}" class="btn btn-primary ml-auto">
         <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{ route('categorias_pro.update', $categorias_pro->ID_Categorias_Pro)}}" method="POST" enctype="multipart/form-data" id="create">
        @method('PUT')
        @include('categorias_pro.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            <i class="fa fa-save"></i>
            Guardar cambios
        </button>
        <button class="btn btn-danger" form="delete_{{ $categorias_pro->ID_Categorias_Pro}}" onclick="return confirm('¿Esta seguro de eliminar registro?')">
            <i class="fa fa-trash"></i>
            Eliminar
        </button>
        <form action="{{ route('categorias_pro.destroy', $categorias_pro->ID_Categorias_Pro) }}" id="delete_{{$categorias_pro->ID_Categorias_Pro}}" method="post" enctype="multipart/form-data" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection