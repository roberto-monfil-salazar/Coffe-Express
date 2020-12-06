
@extends("layouts.admin")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Agregar cliente</h1>
            <form method="POST" action="{{route("clientes.store")}}">
                @csrf
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="Telefono">Telefono</label>
                    <input required autocomplete="off" name="telefono" class="form-control"
                           type="text" placeholder="Teléfono">
                </div>
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("clientes.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
