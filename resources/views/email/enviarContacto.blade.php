<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Información de mensaje</title>
    <style>
        .title-info {
            font-family: Roboto, sans-serif;
            font-size: 1.6rem;
            text-align: center;
        }

        .pre-names {
            font-weight: bolder;
            color: black;
        }
    </style>
</head>
<body>
<div class="container" style="padding-bottom: 35px">
    <div class="row" style=" padding: 70px">
        <p class="title-info">
            <span style="font-weight: bolder">UNIDAD EDUCATIVA FISCAL PAJÁN</span>
            <br>
            <br>
            Esta información fue generada en base a la información que llenó el usuario desde el sitio web
        </p>
    </div>
    <div class="row" style="margin: auto; background: #f3e3b3; padding: 50px">
        <div class="child body-info">
            <span class="pre-names">Nombre:&nbsp&nbsp</span> <span>{{$contactanos->getNombre()}}</span>
            <br>
            <span class="pre-names">Apellido:&nbsp&nbsp</span> <span>{{$contactanos->getApellido()}}</span>
            <br>
            <span class="pre-names">Correo Electronico:&nbsp&nbsp</span> <span>{{$contactanos->getEmail()}}</span>
            <br>
            <span class="pre-names">Telefóno/Celular:&nbsp&nbsp</span>
            <span>{{$contactanos->getTelefonoCelular()}}</span>
            <br>
            <br>
            <span class="pre-names">Mensaje:&nbsp&nbsp</span>
            <p>
                {{$contactanos->getMensaje()}}
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row" style="text-align: center;margin: auto; font-size:10px; color: red">
        Esta información es confidencial para la institución
        <br>
        Todos los derechos reservados Unidad Educativa Fiscal Paján
    </div>
</div>
</body>
</html>
