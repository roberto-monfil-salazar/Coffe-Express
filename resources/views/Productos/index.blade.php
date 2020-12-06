@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Telefonos Proveedores</h3>
        <a href="{{ route('Productos.create')}}" class="btn btn-primary ml-auto">
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
					<th>Nombre del Productos</th>
					<th>Descripcion</th>
					<th>Precio de compra</th>
					<th>Precio De Venta del Productos</th>
					<th>Fecha de la Entrada</th>
					<th>Fecha de la Salida</th>
					<th>Existencia</th>
					<th>Categorias</th>
					<th>Proveedores</th>
					<th>opciones</th>
				</thead>
				@foreach ($productosss as $Var) 
			
				<tr>
					
					<td>{{$Var->ID_Productos}}</td>
					<td>{{$Var->Nombre_Productos}}</td>
					<td>{{$Var->descripcion}}</td>
					<td>{{$Var->precio_compra}}</td>
					<th>{{$Var->Precio_DeVenta_Productos}}</th>
					<th>{{$Var->Fecha_Entrada}}</th>
					<th>{{$Var->Fecha_Salida}}</th>
					<td>{{$Var->existencia}}</td>
					<th>{{$Var->categoria}}</th>
					<th>{{$Var->Nombre_proveedor}}</th>
					
					<td>
						<div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('Productos.show', $Var->ID_Productos)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('Productos.edit', $Var->ID_Productos)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$Var->ID_Productos}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('Productos.destroy', $Var->ID_Productos)}}" id="delete_{{$Var->ID_Productos}}"
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
    window.location.href = '{{ route( "Productos.index" ) }}?limit=' + $(this).val() + '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = '{{ route("Productos.index") }}?limit=' + $('#limit').val() + '&search=' + $(this).val()
    }
})
</script>
@endsection