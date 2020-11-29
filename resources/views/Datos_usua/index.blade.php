@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Datos de Usuario</h3>
</div>
<a href="exportarDatos_usuarios" class="btn btn-success m-auto">EXCEL</a>
<a href="{{route('Datos_usua.pdf')}}" class="btn btn-danger ml-auto">PDF</a>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre Completo</th>
					<th>Direccion</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>Tipo De Telefono</th>
					<th>Numero Telefonico</th>
				</thead>
				@foreach ($datosusua as $Var)
				<tr>
					<td>{{$Var->Nombre_Completo}}</td>
					<td>{{$Var->Sexo}}</td>
					<th>{{$Var->Edad}}</th>
					<th>{{$Var->Direccion}}</th>
					<th>{{$Var->Usuario}}</th>
					<th>{{$Var->Contraseña}}</th>
					<th>{{$Var->tipoDe_Telefono}}</th>
					<th>{{$Var->Numero_Telefonico}}</th>
					
				</tr>
				@endforeach
			</table>
		</div>

		{{$datosusua->render()}}
	</div>

</div>
@endsection