@csrf

    <div class="col-8">
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" class="form-control" value="{{(isset($categorias_pro))?$categorias_pro->categoria:old('categorias')}}" placeholder="Categoria...">
        </div>
    </div>
    <div class="col-12"> 
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" class="form-control" value="{{(isset($categorias_pro))?$categorias_pro->Nombre:old('Nombre')}}" placeholder="Nombre...">
        </div>
    </div>
    <div class="col-12"> 
        <div class="form-group">
            <label for="condicion">Condicion</label>
            <input type="text" name="condicion" class="form-control" value="{{(isset($categorias_pro))?$categorias_pro->condicion:old('condicion')}}" placeholder="condicion...">
        </div>
    </div>
