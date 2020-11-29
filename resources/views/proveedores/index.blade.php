@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de proveedores </h3>
            <a href="{{ route('proveedores.create')}}" class="btn btn-primary ml-auto">
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
					<th>Nombre del Proveedor</th>
					<th>Correo Electronico del Proveedor</th>
					<th>Razon Social</th>
					
					<th>opciones</th>
				</thead>
				@foreach ($proveedores as $Var)
				<tr>
					<td>{{$Var->ID_Proveedores}}</td>
					<td>{{$Var->Nombre_proveedor}}</td>
					<th>{{$Var->CorreoElectronico_proveedor}}</th>
					<th>{{$Var->RazonSocual_Proveedor}}</th>
					
					<td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('proveedores.show', $Var->ID_Proveedores)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('proveedores.edit', $Var->ID_Proveedores)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$Var->ID_Proveedores}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('proveedores.destroy', $Var->ID_Proveedores)}}" id="delete_{{$Var->ID_Proveedores}}"
                                method="post" enctype="multipart/form-data" hidden>
                                @csrf
                                @method('DELETE')
                            </form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>

		{{$proveedores->render()}}
	</div>

</div>
@endsection