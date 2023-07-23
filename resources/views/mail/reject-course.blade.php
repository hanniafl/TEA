<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo rechazado</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Curso rechazado</h1>
    <p>El curso <strong>{{$course->title}}</strong> ha sido rechazado</p>
    <h2>Motivo del rechazo</h2>
    {!!$course->observation->body!!}
    <br>
    <p class="text-xs">Para cualquier duda favor de comunicarse con el administrador</p>
</body>
</html>