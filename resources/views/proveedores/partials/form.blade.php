@csrf
    <div class="col-8">
        <div class="form-group">
            <label for="Nombre_proveedor">Nombre del Proveedor</label>
            <input type="text" name="Nombre_proveedor" class="form-control" value="{{(isset($proveedores))?$proveedores->Nombre_proveedor:old('Nombre_proveedor')}}" placeholder="Nombre_proveedor...">
        </div>
    </div>
    <div class="col-12"> 
        <div class="form-group">
            <label for="CorreoElectronico_proveedor">Correo Electronico</label>
            <input type="text" name="CorreoElectronico_proveedor" class="form-control" value="{{(isset($proveedores))?$proveedores->CorreoElectronico_proveedor:old('CorreoElectronico_proveedor')}}" placeholder="CorreoElectronico_proveedor...">
        </div>
    </div>
    <div class="col-12"> 
        <div class="form-group">
            <label for="RazonSocual_Proveedor">Razon Social</label>
            <input type="text" name="RazonSocual_Proveedor" class="form-control" value="{{(isset($proveedores))?$proveedores->RazonSocual_Proveedor:old('RazonSocual_Proveedor')}}" placeholder="RazonSocual_Proveedor...">
        </div>
    </div>

