@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle Direcciones Usuarios</h3>
        <a href="{{ route('Direcciones_proveedores.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $direccionesproveedores->ID_Direccion_Proveedor}}</p>
        <p><b> Estado:</b>  {{ $direccionesproveedores->Estado_Repu}}</p>
        <p><b> Municipio :</b> {{ $direccionesproveedores->Municipio}} </p>
        <p><b> Colonia :</b> {{ $direccionesproveedores->Colonia}} </p>
        <p><b>Nombre del la Calle  :</b> {{ $direccionesproveedores->NombreCalle_Direccion}} </p>
        <p><b> Numero Exterior :</b> {{ $direccionesproveedores->NumeroExterior_Direccion}} </p>
        <p><b>Numero Interior:</b> {{ $direccionesproveedores->NumeroInterior_Direccion}} </p>
        <p><b>Codigo Postal:</b> {{ $direccionesproveedores->CodigoPostal_Direccion}} </p>
        <p><b>Proveedores :</b> {{ $direccionesproveedores->ID_Proveedores}} </p>


    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('Direcciones_proveedores.edit', $direccionesproveedores->ID_Direccion_Proveedor) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection