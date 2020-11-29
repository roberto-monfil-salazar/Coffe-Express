<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuarios</title>
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
    <h2>Reporte de Usuarios</h2>
    <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Direccion</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Tipo De Telefono</th>
                <th>Numero Telefonico</th>
            </tr>
        </thead>
        @foreach ($datos_usua as $cat)
        <tr>
            <td>{{$cat->Nombre_Completo}}</td>
            <td>{{$cat->Direccion}}</td>
            <td>{{$cat->Edad}}</th>
            <td>{{$cat->Sexo}}</th>
            <td>{{$cat->Usuario}}</th>
            <td>{{$cat->Contraseña}}</th>
            <td>{{$cat->tipoDe_Telefono}}</th>
            <td>{{$cat->Numero_Telefonico}}</th>

        </tr>
        @endforeach
    </table>
</body>

</html>