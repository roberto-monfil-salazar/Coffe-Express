@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Direcciones Proveedores</h3>
        <a href="{{ route('Direcciones_proveedores.create')}}" class="btn btn-primary ml-auto">
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
					<th>Estado</th>
					<th>Municipio</th>
					<th>Colonia</th>	
					<th>Nombre de la Calle</th>
					<th>Numero Exterior</th>
					<th>Numero Interior</th>
					<th>Codigo Postal</th>
					<th>Proveedores </th>
					<th>opciones</th>
				</thead>
				@foreach ($direccionesproveedores as $Var) 
			
				<tr>
					
					<td>{{$Var->ID_Direccion_Proveedor}}</td>
					<td>{{$Var->Estado_Repu}}</td>
					<th>{{$Var->Municipio}}</th>

					<th>{{$Var->Colonia}}</th>
					<th>{{$Var->NombreCalle_Direccion}}</th>
					<th>{{$Var->NumeroExterior_Direccion}}</th>
					<th>{{$Var->NumeroInterior_Direccion}}</th>
					<th>{{$Var->CodigoPostal_Direccion}}</th>
					<th> {{$Var->Nombre_proveedor }}</th>

					
					<td>
						<div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('Direcciones_proveedores.show', $Var->ID_Direccion_Proveedor)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('Direcciones_proveedores.edit', $Var->ID_Direccion_Proveedor)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$Var->ID_Direccion_Proveedor}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('Direcciones_proveedores.destroy', $Var->ID_Direccion_Proveedor)}}" id="delete_{{$Var->ID_Direccion_Proveedor}}"
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
    window.location.href = '{{ route( "Direcciones_proveedores.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = '{{ route("Direcciones_proveedores.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
    }
})
</script>
@endsection