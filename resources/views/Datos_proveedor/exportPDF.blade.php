<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Usuarios</title>
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
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Municipio</th>
                <th>Direccion</th>
                <th>Codigo Postal</th>
                <th>Tipo de Telefono</th>
                <th>Numero de Telefono</th>
            </tr>
        </thead>
        @foreach ($datos_proveedor as $cat)
        <tr>
            <td>{{$cat->Nombre}}</td>
            <td>{{$cat->Correo_Electronico}}</td>
            <td>{{$cat->Municipio}}</th>
            <td>{{$cat->Direccion}}</th>
            <td>{{$cat->Codigo_Postal}}</th>
            <td>{{$cat->Tipo_de_Telefono}}</th>
            <td>{{$cat->Numero_de_Telefono}}</th>

        </tr>
        @endforeach
    </table>
    </div>
    </div>

    </div>
</body>

</html>