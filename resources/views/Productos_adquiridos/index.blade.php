@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Datos de Proveedor</h3>
</div>
<a href="exportarProductos_adquiridos" class="btn btn-success m-auto">EXCEL</a>
<a href="{{route('Productos_adquiridos.pdf')}}" class="btn btn-danger ml-auto">PDF</a>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre Productos</th>
					<th>Precio De Venta Productos</th>
					<th>Categoria</th>
					<th>Nombre proveedor</th>
					<th>Correo Electronico del proveedor</th>
					<th>Numero Telefono</th>
				</thead>
				@foreach ($productosadquiridos as $Var)
				<tr>
					<td>{{$Var->Nombre_Productos}}</td>
					<td>{{$Var->Precio_DeVenta_Productos}}</td>
					<th>{{$Var->categoria}}</th>
					<th>{{$Var->Nombre_proveedor}}</th>
					<th>{{$Var->CorreoElectronico_proveedor}}</th>
					<th>{{$Var->Numero_Telefono}}</th>
					
				</tr>
				@endforeach
			</table>
		</div>

		{{$productosadquiridos->render()}}
	</div>

</div>
@endsection