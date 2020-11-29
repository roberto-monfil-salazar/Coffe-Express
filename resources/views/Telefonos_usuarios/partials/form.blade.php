@csrf
<div class="form-group">
    <label for="tipoDe_Telefono">Tipo De Telefono</label>
    <input type="text" name="tipoDe_Telefono" class="form-control" value="{{(isset($telefonousuario))?$telefonousuario->tipoDe_Telefono:old('tipoDe_Telefono')}}" placeholder="Tipo De Telefono..">
</div>
<div class="form-group">
    <label for="Numero_Telefono">Numero de Telefono</label>
    <input type="text" name="Numero_Telefono" class="form-control" value="{{(isset($telefonousuario))?$telefonousuario->Numero_Telefono:old('Numero_Telefono')}}" placeholder="Numero de Telefono...">
</div>

<div class="col-12">
    <div class="form-group">
        <label for="">Usuario</label>
        <select class="form-control" name="id" class="col-12">
            @foreach($Usuarios as $Usuario)
            <option value="{{ $Usuario->id }}" required> {{$Usuario->name}}</option>
            @endforeach
        </select>
    </div>
</div>