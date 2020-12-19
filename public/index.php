<?php	
<<<<<<< HEAD
session_start();
=======

session_start();

>>>>>>> 7b0266faf8065e7e9f434ea0a40fcad9f667ceb4
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

if (isset($_GET['url'])) {
    $url = $_GET['url'];
}

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');