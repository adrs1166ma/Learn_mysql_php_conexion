<?php

$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');
// conectar a nuestra pc, con nuestro usuario, con password, y a la bd de appsalon

if(!$db){
    echo "Hubo un eror";
    exit;
}