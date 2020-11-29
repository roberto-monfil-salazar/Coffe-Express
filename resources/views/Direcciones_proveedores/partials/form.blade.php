@csrf
<div class="col-12">
    <div class="form-group">
        <label for="Estado_Repu">Estado</label>
        <select class="form-control" name="Estado_Repu" class="col-12">
                <option value="no">Seleccione uno...</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="CDMX">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>

        </select>
    </div>
</div>
<div class="form-group">
    <label for="Municipio">Municipio</label>
    <input type="text" name="Municipio" class="form-control" value="{{(isset($direccionesproveedores))?$direccionesproveedores->Municipio:old('Municipio')}}" placeholder="Municipio...">
</div>
<div class="form-group">
    <label for="Colonia">Colonia</label>
    <input type="text" name="Colonia" class="form-control" value="{{(isset($direccionesproveedores))?$direccionesproveedores->Colonia:old('Colonia')}}" placeholder="Colonia...">
</div>
<div class="form-group">
    <label for="NombreCalle_Direccion">Nombre de la Calle</label>
    <input type="text" name="NombreCalle_Direccion" class="form-control" value="{{(isset($direccionesproveedores))?$direccionesproveedores->NombreCalle_Direccion:old('NombreCalle_Direccion')}}" placeholder="NombreCalle_Direccion...">
</div>
<div class="form-group">
    <label for="NumeroExterior_Direccion">Numero Exterior </label>
    <input type="text" name="NumeroExterior_Direccion" class="form-control" value="{{(isset($direccionesproveedores))?$direccionesproveedores->NumeroExterior_Direccion
    :old('NumeroExterior_Direccion ')}}" placeholder="NumeroExterior_Direccion
    ...">
</div>
<div class="form-group">
    <label for="NumeroInterior_Direccion">Numero Interior</label>
    <input type="text" name="NumeroInterior_Direccion" class="form-control" value="{{(isset($direccionesproveedores))?$direccionesproveedores->NumeroInterior_Direccion:old('NumeroInterior_Direccion')}}" placeholder="NumeroInterior_Direccion...">
</div>
<div class="form-group">
    <label for="CodigoPostal_Direccion">Codigo Postal</label>
    <input type="text" name="CodigoPostal_Direccion" class="form-control" value="{{(isset($direccionesproveedores))?$direccionesproveedores->CodigoPostal_Direccion:old('CodigoPostal_Direccion')}}" placeholder="CodigoPostal_Direccion...">
</div>
<div class="col-12">
    <div class="form-group">
        <label for="">Proveedor</label>
        <select class="form-control" name="ID_Proveedores" class="col-12">
            @foreach($proveedor as $Proveed)
            <option value="{{$Proveed->ID_Proveedores}}" required> {{$Proveed->Nombre_proveedor}}</option>
            @endforeach
        </select>
    </div>
</div>