<?php
session_start();

//
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
} else{
    $controller = 'home';
}
if(isset($_GET['action'])){
    $action = $_GET['action'];
} else{
    $action = 'index';
}
$file = 'src/controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) {
    require($file);
} else {
    NotFound();
}


