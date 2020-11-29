@extends ('layouts.admin')
@section ('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Editar Telefonos usuarios</h3>
        <a href="{{ route('Telefonos_usuarios.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <form action="{{route('Telefonos_usuarios.update', $telefonousuario->ID_Telefonos_Usuarios)}}" method="POST" enctype="multipart/form-data" id="create">
        @method('PUT')
        @include('Telefonos_usuarios.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            <i class="fa fa-save"></i>
            Guardar cambios
        </button>
        <button class="btn btn-danger" form="delete_{{ $telefonousuario->ID_Telefonos_Usuarios}}" onclick="return confirm('¿Esta seguro de eliminar registro?')">
            <i class="fa fa-trash"></i>
            Eliminar
        </button>
        <form action="{{ route('Telefonos_usuarios.destroy', $telefonousuario->ID_Telefonos_Usuarios) }}" id="delete_{{$telefonousuario->ID_Telefonos_Usuarios}}" method="post" enctype="multipart/form-data" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
@endsection