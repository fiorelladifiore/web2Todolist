<?php

function getAllTasks() {
//abrimos la conexión
$db = new PDO('mysql:host=localhost;dbname=db_tareas;charset=utf8', 'root', '');

//enviar la consulta
$sentencia = $db->prepare("SELECT * FROM tarea");
$sentencia->execute();
$tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);

return $tareas;
}


