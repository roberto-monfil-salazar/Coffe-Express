@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle de los Telefonos de usuarios</h3>
        <a href="{{ route('Telefonos_usuarios.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $telefonousuario->ID_Telefonos_Usuarios}}</p>
        <p><b>Tipo de Telefono :</b>  {{ $telefonousuario->tipoDe_Telefono}}</p>
        <p><b>Numero de Telefono:</b> {{ $telefonousuario->Numero_Telefono}} </p>
        <p><b>Usuario:</b> {{ $telefonousuario->id}} </p>
    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('Telefonos_usuarios.edit', $telefonousuario->ID_Telefonos_Usuarios) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection