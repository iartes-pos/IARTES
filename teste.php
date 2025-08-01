<?php

$host = 'localhost';
$user = 'root';
$password = 'web@@2021';
$db_name = 'test';

$connex = mysqli_connect($host, $user, $password, $db_name);

if($connex){
    echo "conectado";
}


?>