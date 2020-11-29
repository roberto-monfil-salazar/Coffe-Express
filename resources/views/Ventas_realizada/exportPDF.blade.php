<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Venta</title>
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
    <h2>Datos de Usuarios</h2>
    <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>Nombre_Productos</th>
                    <th>Precio_Producto</th>
                    <th>Cantidad_Producto</th>
                    <th>Importe</th>
                    <th>Importe</th>
                    <th>hora_venta</th>
            </tr>
        </thead>
        @foreach ($ventas_realizada as $Var)
        <tr>
                    <td>{{$Var->Nombre_Productos}}</td>
                    <td>{{$Var->Precio_Producto}}</td>
                    <th>{{$Var->Cantidad_Producto}}</th>
                    <th>{{$Var->Importe}}</th>
                    <th>{{$Var->Importe}}</th>
                    <th>{{$Var->hora_venta}}</th>

        </tr>
        @endforeach
    </table>
    </div>
    </div>

    </div>
</body>

</html>