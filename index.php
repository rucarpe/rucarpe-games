<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    <title>rucarpe Games</title> 
</head>
<body>
        <!-- Header - Cabecera -->
    <header class="main-header">
            <a  href="index.php" id="logo" class="page-title"> <h1>rucarpeGames.io</h1></a>

        <!--Menú-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <ul id="main-menu">
                <li id="menu-item-1">Home</li>
                <li id="menu-item-2">Categoría 1</li>
                <li id="menu-item-3">Categoría 2</li>
                <li id="menu-item-4">Categoría 3</li>
                <li id="menu-item-5">Categoría 4</li>
                <li id="menu-item-6">Sobre nosotros</li>
                <li id="menu-item-7">Contacto</li>
            </ul>
        </nav><!-- Fin Menú-->
    </header> <!-- Fin Cabecera -->
    <!--Asaid -->
    <aside id="sidebar">
        <h3>Identifícate</h3>
        <form id="login-form-aside" method="post" action="login.php">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Iniciar sesión">
        </form>

        <form id="register-form-aside" method="post" acton="register.php">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="input-nombre">
            <label type="text" name="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="input-apellidos">
            <label for="email">Email</label>
            <input type="email" name="email" id="input-email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="input-password">
            <input type="submit" name="submit" value="Registrar">
        </form>
    </aside> <!-- Fin Asaid -->
    


    <!--Main content-->
    <h2>Últimas noticias</h2>
    <section class="content-1">
        <article class="article-1">
            <h2>Título de la entrada</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>   
        </article>
        <article class="article-2">
            <h2>Título de la entrada 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>   
        </article>
        <article class="article-3">
            <h2>Título de la entrada 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>   
        </article>
    </section> <!-- Fin Main Content -->

    <!--Footer-->
    <footer id="main-footer">
        Desarrollado por <a href="https://rucarpe.com">rucarpe</a>
    </footer>
</body>
</html>
<hr><br><br><br>

<input name="numero1" type="number" value="0">