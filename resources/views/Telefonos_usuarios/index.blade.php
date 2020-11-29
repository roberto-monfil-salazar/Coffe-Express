@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Telefonos Usuarios</h3>
        <a href="{{ route('Telefonos_usuarios.create')}}" class="btn btn-primary ml-auto">
            <i class="fa fa-plus"></i>
            Agregar
        </a>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>Tipo De Telefono</th>
					<th>Numero de Telefono</th>
					<th>Nombre del Usuario</th>
					<th>Opciones</th>
				</thead>
				@foreach ($telefonousuario as $telefonousuarios) 
			
				<tr>
					
					<td>{{$telefonousuarios->ID_Telefonos_Usuarios}}</td>
					<td>{{$telefonousuarios->tipoDe_Telefono}}</td>
					<th>{{$telefonousuarios->Numero_Telefono}}</th>
					<th>{{$telefonousuarios->name}}</th>
					
					<td>
						<div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('Telefonos_usuarios.show', $telefonousuarios->ID_Telefonos_Usuarios)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('Telefonos_usuarios.edit', $telefonousuarios->ID_Telefonos_Usuarios)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$telefonousuarios->ID_Telefonos_Usuarios}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('Telefonos_usuarios.destroy', $telefonousuarios->ID_Telefonos_Usuarios)}}" id="delete_{{$telefonousuarios->ID_Telefonos_Usuarios}}"
                                method="post" enctype="multipart/form-data" hidden>
                                @csrf
                                @method('DELETE')
                            </form>
					</td>
				</tr>
			
				@endforeach
			</table>
		</div>

    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$('#limit').on('change', function() {
    window.location.href = '{{ route( "Telefonos_usuarios.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = '{{ route("Telefonos_usuarios.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
    }
})
</script>
@endsection