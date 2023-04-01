<?php require_once 'conexion.php'; ?>

<div class="clearfix"></div>
    
<!--Asaid -->
    <aside id="sidebar">
        <h3>Identifícate</h3>

    <!-- Formulario - Inicio de sesión -->
        <form id="login-form-aside" method="POST" action="login.php">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="submit" value="Iniciar sesión">
        </form>
    <!-- Fin formulario - Inicio de sesión - Login-->

    <!-- Formulario - Regístro -->    
        <form id="register-form-aside" method="POST" action="register.php">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="input-nombre">
            <label type="text">Apellidos</label>
            <input type="text" name="apellidos" id="input-apellidos">
            <label for="email">Email</label>
            <input type="email" name="email" id="input-email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="input-password">
            <input type="submit" name="submit" value="Registrar">
        </form>
    <!-- Fin formulario - Regístro - Sign Up-->    
    </aside> <!-- Fin Asaid -->