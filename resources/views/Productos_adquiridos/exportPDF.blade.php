<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Adquiridos</title>
    <style>
        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 3px solid purple;
        }
        th,
        td,
        tr {
            width: 15%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>
        Productos Adquiridos
    </h2>
    <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>Nombre Productos</th>
                <th>Precio De Venta</th>
                <th>Categoria</th>
                <th>Nombre proveedor</th>
                <th>Correo Electronico</th>
                <th>Numero de Telefono</th>
            </tr>
        </thead>
        @foreach ($productos_adquiridos as $cat)
        <tr>
            <td>{{$cat->Nombre_Productos}}</td>
            <td>{{$cat->Precio_DeVenta_Productos}}</td>
            <td>{{$cat->categoria}}</th>
            <td>{{$cat->Nombre_proveedor}}</th>
            <td>{{$cat->CorreoElectronico_proveedor}}</th>
            <td>{{$cat->Numero_Telefono}}</th>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    </div>
</body>

</html>