<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog de videojuegos</title>
</head>
<body>
    <!--Cabecera   -->
    <header id="cabecera">
        <div id="logo">
        <a href="index.php">Blog de videojuegos</a>
        </div>
        <!--Menú  -->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Categoría 1</a></li>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
    
    <aside id="sidebar">
        <!--Barra lateral   -->
        <div id="login" class="bloque">
            <h3>Identíficate</h3>
            <form action="login.php" method="post">
            
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Entrar">
            </form>
        </div>
        <div id="register" class="bloque">
            <h3>Registrate</h3>
            <form action="registro.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos">
            <label for="email">Email</label>
            <input type="email" name="email" >
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Registrar">
            </form>
        </div>
    </aside>
    <!--Caja principal   -->

    <div id="principal">
    <h1>Últimas entradas</h1>
    <article class="entrada">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, incidunt sed, beatae voluptatibus animi facilis maiores aspernatur dolor corrupti minima sapiente explicabo maxime, aut ad amet temporibus nemo eius error!
        </p>
    </article>
    <article class="entrada">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, incidunt sed, beatae voluptatibus animi facilis maiores aspernatur dolor corrupti minima sapiente explicabo maxime, aut ad amet temporibus nemo eius error!
        </p>
    </article>
    <article class="entrada">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, incidunt sed, beatae voluptatibus animi facilis maiores aspernatur dolor corrupti minima sapiente explicabo maxime, aut ad amet temporibus nemo eius error!
        </p>
    </article>
    </div>
    </div>
    
    <!--Footer   -->
    <footer id="pie">
    <p>Desarrollado por Axel García &copy; 2021</p>
    </footer>
</body>
</html>