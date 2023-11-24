<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de registro</title>
  <div id="dato"></div>
  <link rel="stylesheet" href="css2/bootstrap.min.css"  crossorigin="anonymous">
  <link rel="stylesheet" type="text/css2" href="formuklarioestilo.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="extensionjava.java"></script>
</head>

<body>
  <div class="container">
    <h1>Formulario de registro</h1>
    <form method="post" action="alumnos"  > 
    @csrf
      <div class="mb-3">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo" >
      </div>
      <div class="mb-3">
        <label for="ram" class="form-label">RAM</label>
        <input type="number" class="form-control" id="ram" name="ram">
      </div>
      <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio">
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
  </div>
  <script type="text/javascript"></script>
</body>
</html>