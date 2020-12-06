@csrf
<div class="form-group">
    <label for="Nombre_Productos">Nombre_Productos</label>
    <input type="text" name="Nombre_Productos" class="form-control" value="{{(isset($productosss))?$productosss->Nombre_Productos:old('Nombre_Productos')}}" placeholder="Nombre_Productos..">
</div>
<div class="form-group">
    <label for="label">Descripción</label>
    <input required value="{{(isset($productosss))?$productosss->descripcion:old('descripcion')}}" autocomplete="off" name="descripcion"
           class="form-control"
           type="text" placeholder="Descripción">
</div>
<div class="form-group">
    <label class="for">Precio de compra</label>
    <input required value="{{(isset($productosss))?$productosss->precio_compra:old('precio_compra')}}" autocomplete="off" name="precio_compra"
           class="form-control"
           type="decimal(9,2)" placeholder="Precio de compra">
</div>
<div class="form-group">
    <label for="Precio_DeVenta_Productos">Precio_DeVenta_Productos</label>
    <input type="text" name="Precio_DeVenta_Productos" class="form-control"  value="{{(isset($productosss))?$productosss->Precio_DeVenta_Productos:old('Precio_DeVenta_Productos')}}" autocomplete="off" name="Precio_DeVenta_Productos"
    class="form-control"
    type="decimal(9,2)" placeholder="Precio de venta>
</div>

<div class="form-group">
    <label for="Fecha_Entrada">Fecha_Entrada</label>
    <input type="text" name="Fecha_Entrada" class="form-control"  value="{{(isset($productosss))?$productosss->Fecha_Entrada:old('Fecha_Entrada')}}" placeholder="Fecha_Entrada...">
</div>
<div class="form-group">
    <label for="Fecha_Salida">Fecha_Salida</label>
    <input type="text" name="Fecha_Salida" class="form-control"  value="{{(isset($productosss))?$productosss->Fecha_Salida:old('Fecha_Salida')}}" placeholder="Fecha_Salida...">
</div>
<div class="form-group">
    <label for="label">Existencia</label>
    <input required value="{{(isset($productosss))?$productosss->existencia:old('existencia')}}" autocomplete="off" name="existencia"
           class="form-control"
           type="decimal(9,2)" placeholder="Existencia">
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">Proveedor</label>
        <select class="form-control" name="ID_Categorias_Pro" class="col-12">
            @foreach($categoriaspro as $Proveed)
            <option value="{{$Proveed->ID_Categorias_Pro}}" required> {{$Proveed->categoria}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">Proveedor</label>
        <select class="form-control" name="ID_Proveedores" class="col-12">
            @foreach($Proveedor as $categori)
            <option value="{{$categori->ID_Proveedores}}" required> {{$categori->Nombre_proveedor }}</option>
            @endforeach
        </select>
    </div>
</div>