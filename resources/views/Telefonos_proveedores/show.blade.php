@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle Telefonos usuarios</h3>
        <a href="{{ route('Telefonos_proveedores.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $telefonosproveedor->ID_Telefonos_Proveedores}}</p>
        <p><b>Tipo de Telefono :</b>  {{ $telefonosproveedor->tipoDe_Telefono}}</p>
        <p><b>Numero de Telefono:</b> {{ $telefonosproveedor->Numero_Telefono}} </p>
        <p><b>Usuario:</b> {{ $telefonosproveedor->ID_Proveedores}} </p>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('Telefonos_proveedores.edit', $telefonosproveedor->ID_Telefonos_Proveedores) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection