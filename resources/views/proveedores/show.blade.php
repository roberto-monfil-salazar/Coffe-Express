@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle proveedores</h3>
        <a href="{{ route('proveedores.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $proveedores->ID_Proveedores}}</p>
        <p><b>Nombre del proveedor :</b>  {{ $proveedores->Nombre_proveedor}}</p>
        <p><b>Correo Electronico del Proveedor :</b> {{ $proveedores->CorreoElectronico_proveedor}} </p>
        <p><b>Razon Social :</b> {{ $proveedores->RazonSocual_Proveedor}} </p>
     
         </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('proveedores.edit', $proveedores->ID_Proveedores) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection