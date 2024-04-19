<?php

require_once "sql_tasks.php";

function showTasks(){
echo '<!DOCTYPE html>
<html lang="en">
<head>
<base href=" '.BASE_URL.'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>';
echo '
<nav class="navbar" style="background-color: #CDCACD;">
</nav>
';
echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ToDoList</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<form class="col-3 m-auto" action="addTask" method="POST">
    <legend class="text-center">Agregar tarea</legend>
    <div class="mb-3">
      <label class="form-label">Nombre de tarea</label>
      <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
    </div>
    <div class="mb-3">
      <label class="form-label">Descripción de tarea</label>
      <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripción">
    </div>
    <div class="mb-3">
    <label class="form-label">Prioridad de tarea</label>
    <select name="prioridad" class="form-select">
        <option value="">Seleccione una prioridad</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <option>Disabled select</option>
      </select>

</form>';

$tareas = getAllTasks();
echo '
<table class="table table-secondary table-bordered mt-4">
<thead>
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Prioridad</th>
    <th scope="col">Finalizada</th>
  </tr>
</thead>
<tbody>';
foreach ($tareas as $tarea) {
    $col1 = "<td>$tarea->nombre</td>";
    $col2 = "<td>$tarea->descripcion</td>";
    $col3 = "<td>$tarea->prioridad</td>";
    $col4 = "<td>$tarea->finalizada</td>";

    echo "<tr>$col1 $col2 $col3 $col4</tr>";
};
echo '
</tbody>
</table>
';


echo '
</body>
</html>';
}

function newTask(){

}