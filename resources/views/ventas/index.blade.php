@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <b >Ventas</b>
        <div>
        <a href="{{ route('ventas.create')}}" class="btn btn-primary ml-auto">
            <i class="fa fa-plus"></i>
            Agregar
        </a>
    </div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>ID</th>
					<th>fecha_venta</th>
					<th>hora_venta</th>
					<th>Total_ven</th>
					<th>Nombre_Usuario</th>
					<th>opciones</th>
				</thead>
				@foreach ($venta as $ventas) 
			
				<tr>
					
					<td>{{$ventas->ID_Ventas}}</td>
					<td>{{$ventas->fecha_venta}}</td>
					<th>{{$ventas->hora_venta}}</th>
					<th>{{$ventas->Total_ven}}</th>
					<th>{{$ventas->ID_Usuarios}}</th>
					
					<td>
						<div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('ventas.show', $ventas->ID_Ventas)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('ventas.edit', $ventas->ID_Ventas)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$ventas->ID_Ventas}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('ventas.destroy', $ventas->ID_Ventas)}}" id="delete_{{$ventas->ID_Ventas}}"
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