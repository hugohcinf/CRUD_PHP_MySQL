<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b25b47ad33.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">CRUD php, MySql y Bootstrap</h1>
    <div class="container-fluid row">
        <form class="col-3" method="POST">
          <h3 class="text-center text-secundary">Registro</h3>
          <?php
            include "modelo/conexion.php";
            include "controlador/registrar.php";
          ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No. Control</label>
              <input type="text" class="form-control" name="noControl">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre(s)</label>
              <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">A. Paterno</label>
              <input type="text" class="form-control" name="aPaterno">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">A. Materno</label>
              <input type="text" class="form-control" name="aMaterno">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" name="telefono">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">e-mail</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control" name="fechaNacimiento">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
        </form>
        <div class="col-9 p-2">
          <h3>Listado</h3>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">No. Control</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">A. Paterno</th>
                <th scope="col">A. Materno</th>
                <th scope="col">Teléfono</th>
                <th scope="col">e-mail</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              
                <?php 
                  include "modelo/conexion.php";
                  $sql=$conexion -> query("select * from alumnos");
                  while ($datos=$sql->fetch_object()){?>
                    <tr>
                    <th scope="row">1</th>
                      <td><?= $datos->noControl?></td>
                      <td><?= $datos->nombre?></td>
                      <td><?= $datos->aPaterno?></td>
                      <td><?= $datos->aMaterno?></td>
                      <td><?= $datos->telefono?></td>
                      <td><?= $datos->email?></td>
                      <td><?= $datos->fechaNacimiento?></td>
                      <td>
                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                        <a href="#"><i class="fa-solid fa-pen"></i></a>
                      </td>
                    </tr>
                  <?php
                  }
                ?>
                
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>