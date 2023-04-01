<?php

// Conexión a la base de datos
$db = mysqli_connect("localhost", "root", "", "rcp_rucarpe_games");

//Comprobar si la conecsión a la base de datos es correta:
if (mysqli_connect_errno()){
    echo "Error: La conexión a la base de datos MySQL ha fallado." . mysqli_connect_errno() . "<br>";
}else{
    echo "Bien: Conexión a la base de datos MySQL realizada correctamente." . "<br>";
}

//Configurar condificación de caracteres a utf8:
    mysqli_query($db, "SET NAMES 'utf8'");