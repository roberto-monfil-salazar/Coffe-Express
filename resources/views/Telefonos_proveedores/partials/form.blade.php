@csrf
<div class="form-group">
    <label for="tipoDe_Telefono">Tipo De Telefono</label>
    <input type="text" name="tipoDe_Telefono" class="form-control" value="{{(isset($telefonosproveedor))?$telefonosproveedor->tipoDe_Telefono:old('tipoDe_Telefono')}}" placeholder="tipoDe_Telefono..">
</div>
<div class="form-group">
    <label for="Numero_Telefono">Numero de Telefono</label>
    <input type="text" name="Numero_Telefono" class="form-control"  value="{{(isset($telefonosproveedor))?$telefonosproveedor->Numero_Telefono:old('Numero_Telefono')}}" placeholder="Numero_Telefono...">
</div>

<div class="col-12">
    <div class="form-group">
        <label for="">Proveedor</label>
        <select class="form-control" name="ID_Proveedores" class="col-12">
            @foreach($Proveedor as $Proveed)
            <option value="{{$Proveed->ID_Proveedores}}" required> {{$Proveed->Nombre_proveedor}}</option>
            @endforeach
        </select>
    </div>
</div>