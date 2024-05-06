<?php

function getConnection(){
    $host='localhost';
    $database='db_tareas';
    $username='root';
    $password='';

    try {
        $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    }catch(Exception $e){
        var_dump($e);
    }
    return $db;
}