<?php

require_once "../config/config.php";

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$con){
    die("Can not connect to database");
}

