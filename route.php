<?php

require_once "tasks.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
if (empty($_GET['action'])) {       
    $_GET['action'] = 'task';
}

$action = $_GET['action'];
$parametro = explode('/', $action);

//  print_r($parametro);
switch ($parametro[0]) {
    case 'task':
        showTasks(); 
        break;
    case 'about':
        
        break;
    case 'login':
       
        break;
    case 'addTask':
        
        break;
    case 'division':
        
        break;
    case 'nombres':
    
        break;
    

   

    default:
    //    TODO:: hacer algo
}

