<!DOCTYPE html>
<html>    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="./css/jajalolxs.css">
    <!-- Agrega aquí los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="row">
            <div class="col-sm-8 col-md-12 col-lg-8" >
                <!-- Tabla con información de canciones, álbumes o géneros musicales -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Modelo</th>
                            <th>Ram</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                @foreach($compus as $compu)
                    <tr>
                        <td>{{$compu->id}}</td>
                        <td>{{$compu->modelo}}</td>
                        <td>{{$compu->ram}}</td>
                        <td>{{$compu->precio}}</td>
                    </tr>   
                @endforeach     
                </table>
</body>
                </html>