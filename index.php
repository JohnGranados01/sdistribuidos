<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="user.html">Agregar</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
    </nav>
      <h1 class="display-4 text-center">Colegio pinceladas</h1>
      <br>
      <table class="table table-striped">
      <thead>
        <tr class="table-success">
          <th scope="col">#</th>
          <th scope="col">Identificacion</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellidos</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $array = getEstudents();
        $i=0;
        foreach ($array as $estudiante) {
          $i++;
          echo '<tr>
                  <th scope="row">'.($i).'</th>
                  <td>'.$estudiante["idestudiante"].'</td>
                  <td>'.$estudiante["nombreEstudiante"].'</td>
                  <td>'.$estudiante["edadEstudiante"].'</td>
                </tr>';
        } 
        ?> 
        </tbody>
      </table>
    </div>
    <div class="container"><br>
      <h6 class="display-4">Tareas</h6><br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Asignatura</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descargar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Sociales</td>
            <td>Regiones de colombia</td>
            <td>
              
              <a Download href="https://27d437d4df00.ngrok.io/Recursos/regiones.pdf" target="_blank">Descargar</a>

              <h5>
               Si no funciona el link para regiones usa esta alternativa
              </h5>
              <a Download href="https://alojamientoarchivos.000webhostapp.com/Recursos/regiones.pdf" target="_blank">Descargar</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Matemáticas</td>
            <td>Suma de fraccionarios</td>
            <td>
              <a download href="https://27d437d4df00.ngrok.io/Recursos/operaciones.pdf" target="_blank">Descargar</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Informatica</td>
            <td>Partes de un computador</td>
            <td>
              <a download href="https://27d437d4df00.ngrok.io/Recursos/partes.pdf" target="_blank">Descargar</a>
            </td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </body>
</html>

<?php
function getEstudents(){
  require_once './Conexion.php';
  $con = new Conexion;
  $sqlstr = "SELECT * FROM estudiante";
  return $con->seleccion($sqlstr);
}
?>
