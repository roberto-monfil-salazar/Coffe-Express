@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Categorías</h3>
            <a href="{{ route('categorias_pro.create')}}" class="btn btn-primary ml-auto">
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
					<th>Categoria</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
				@foreach ($categorias_pro as $categorias_pros)
				<tr>
					<td>{{$categorias_pros->ID_Categorias_Pro}}</td>
					<td>{{$categorias_pros->categoria}}</td>
					<th>{{$categorias_pros->Nombre}}</th>
					<td>
                        <div class="btn-group" role="group" aria-label="Acciones">
                            <a href="{{route('categorias_pro.show', $categorias_pros->ID_Categorias_Pro)}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{route('categorias_pro.edit', $categorias_pros->ID_Categorias_Pro)}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$categorias_pros->ID_Categorias_Pro}}"
                                onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('categorias_pro.destroy', $categorias_pros->ID_Categorias_Pro)}}" id="delete_{{$categorias_pros->ID_Categorias_Pro}}"
                                method="post" enctype="multipart/form-data" hidden>
                                @csrf
                                @method('DELETE')
                            </form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>

		{{$categorias_pro->render()}}
	</div>

</div>
@endsection