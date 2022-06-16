<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LISTA DE PERSONAS</h1>
    <a href="/persona/create">REGISTRAR PERSONA</a>
    <br> <br>
    <table>
        <tr>
            <th>dni</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>cargo</th>
            <th>Empresa</th>
        </tr>
        @foreach($personas as $persona)
        <tr>
        <td>{{$persona->dni}}</td>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellidos}}</td>
            <td>{{$persona->email}}</td>
            <td>{{$persona->cargo}}</td>
            <td>{{$persona->empresa}}</td>
            
        </tr>
        @endforeach
        
    </table>
    <br>
    <a href="/">REGRESAR AL MENU PRINCIPAL</a>
</body>
</html>
