<?php

require_once "connection.php";

function getAllTasks() {
$db = getConnection(); //abrimos la conexión
//enviar la consulta
$sentencia = $db->prepare("SELECT * FROM tareas");
$sentencia->execute(); //ejecuta
$tareas = $sentencia->fetchAll(PDO::FETCH_OBJ); //convierte a objetos

return $tareas;
}

function insertTask($nombre, $descripcion, $prioridad) {
    $db = getConnection();

    $resultado= $db->prepare("INSERT INTO tareas(nombre, descripcion, prioridad) VALUES (?,?,?)");
    $resultado->execute([$nombre, $descripcion, $prioridad]);
}

function getTask($id){
    $db = getConnection();

    $sentencia = $db->prepare("SELECT * FROM tareas WHERE id_tarea = ?");
    $sentencia->execute([$id]);
    $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
    return $tarea;
}

function finalize($id){
    $db = getConnection();

    $resultado= $db->prepare("UPDATE tareas SET finalizada = ? WHERE id_tarea = ?");
    $resultado->execute([1,$id]); // ejecuta
    
}

function delete($id){
    $db = getConnection();
    $resultado= $db->prepare("DELETE FROM tareas WHERE id_tarea = ?");
    $resultado->execute([$id]); // ejecuta
}