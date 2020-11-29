@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Usuarios</h3>
            <a href="{{ route('usuarios.create')}}" class="btn btn-primary ml-auto">
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
					<th>Nombre del Usuario</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Email</th>
					<!-- <th>Password</th>-->
					<th>Opciones</th>
				</thead>
				@foreach ($usuarios as $Var)
				<tr>
					<td>{{$Var->id}}</td>
					<td>{{$Var->name}}</td>
					<th>{{$Var->Apellido_Pa_Usuario}}</th>
					<th>{{$Var->Apellido_Ma_Usuario}}</th>
					<th>{{$Var->Edad}}</th>
					<th>{{$Var->Sexo}}</th>
					<th>{{$Var->email}}</th>
					<!--<th>{{$Var->password}}</th>-->
					<td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('usuarios.show', $Var->id)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('usuarios.edit', $Var->id)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$Var->id}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('usuarios.destroy', $Var->id)}}" id="delete_{{$Var->id}}"
                                method="post" enctype="multipart/form-data" hidden>
                                @csrf
                                @method('DELETE')
                            </form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>

		{{$usuarios->render()}}
	</div>

</div>
@endsection