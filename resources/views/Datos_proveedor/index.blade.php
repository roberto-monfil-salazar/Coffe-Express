@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Datos de Proveedor</h3>
</div>
<a href="exportarDatos_proveedor" class="btn btn-success m-auto">EXCEL</a>
<a href="{{route('Datos_proveedor.pdf')}}" class="btn btn-danger ml-auto">PDF</a>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Correo Electronico</th>
					<th>Municipio</th>
					<th>Direccion</th>
					<th>Codigo Postal</th>
					<th>Tipo de Telefono</th>
					<th>Numero de Telefono</th>
				</thead>
				@foreach ($datosproveedor as $Var)
				<tr>
					<td>{{$Var->Nombre}}</td>
					<td>{{$Var->Correo_Electronico}}</td>
					<th>{{$Var->Municipio}}</th>
					<th>{{$Var->Direccion}}</th>
					<th>{{$Var->Codigo_Postal}}</th>
					<th>{{$Var->Tipo_de_Telefono}}</th>
					<th>{{$Var->Numero_de_Telefono}}</th>
					
				</tr>
				@endforeach
			</table>
		</div>

		{{$datosproveedor->render()}}
	</div>

</div>
@endsection