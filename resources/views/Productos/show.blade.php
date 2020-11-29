@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle s usuarios</h3>
        <a href="{{ route('Productos.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $productosss->ID_Productos}}</p>
        <p><b>Nombre_Productos :</b>  {{ $productosss->Nombre_Productos}}</p>
        <p><b> Precio_DeVenta_Productos :</b> {{ $productosss->Precio_DeVenta_Productos}} </p>
        <p><b> Fecha_Entrada :</b> {{ $productosss->Fecha_Entrada}} </p>
        <p><b> Fecha_Salida :</b> {{ $productosss->Fecha_Salida}} </p>
        <p><b>Categorias:</b> {{ $productosss->ID_Categorias_Pro}} </p>
        <p><b>Proveedores:</b> {{ $productosss->ID_Proveedores}} </p>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('Productos.edit', $productosss->ID_Productos) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection