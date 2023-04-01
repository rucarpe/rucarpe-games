<?php

if (isset($_POST['submit'])) { 

    $name = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $lastname = isset($_POST['apellidos']) ? $_POST['apellidos'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $submit = isset($_POST['submit']) ? $_POST['submit'] : null;


    var_dump($_POST);


}

?>