@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Datos de Ventas</h3>
		</div>
		<div>
</div>
<a href="exportarVentas_realizada" class="btn btn-success m-auto">EXCEL</a>
<a href="{{route('Ventas_realizada.pdf')}}" class="btn btn-danger ml-auto">PDF</a>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre del Productos</th>
					<th>Precio del Producto</th>
					<th>Cantidad del Producto</th>
					<th>Importe</th>
					<th>Fecha de la venta</th>
					<th>Hora de la venta</th>
				</thead>
				@foreach ($ventasrealizada as $Var)
				<tr>
					<td>{{$Var->Nombre_Productos}}</td>
					<td>{{$Var->Precio_Producto}}</td>
					<th>{{$Var->Cantidad_Producto}}</th>
					<th>{{$Var->Importe}}</th>
					<th>{{$Var->fecha_venta}}</th>
					<th>{{$Var->hora_venta}}</th>
					
				</tr>
				@endforeach
			</table>
		</div>

		{{$ventasrealizada->render()}}
	</div>

</div>
@endsection