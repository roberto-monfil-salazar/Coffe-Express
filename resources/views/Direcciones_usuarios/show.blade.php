@extends ('layouts.admin')
@section ('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle Direcciones Usuarios</h3>
        <a href="{{ route('Direcciones_usuarios.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $direccionesusuarios->ID_Direccion_Usuario}}</p>
        <p><b> Estado de la Republica:</b>  {{ $direccionesusuarios->Estado_Repu}}</p>
        <p><b> Municipio :</b> {{ $direccionesusuarios->Municipio}} </p>
        <p><b> Colonia :</b> {{ $direccionesusuarios->Colonia}} </p>
        <p><b>Numero Exterior  :</b> {{ $direccionesusuarios->NumeroExterior_Direccion}} </p>
        <p><b>Numero Interior  :</b> {{ $direccionesusuarios->NumeroInterior_Direccion}} </p>
        <p><b> Codigo Postal :</b> {{ $direccionesusuarios->CodigoPostal_Direccion}} </p>
        <p><b>Usuario:</b> {{ $direccionesusuarios->id}} </p>



    </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('Direcciones_usuarios.edit', $direccionesusuarios->ID_Direccion_Usuario) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection