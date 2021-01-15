<?php include_once "helpers.php"?>

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
        <?php if(isset($_SESSION['errores'])): ?>
            <?php var_dump($_SESSION['errores']); ?>
        <?php endif; ?>
        <h3>Registrate</h3>

        <form action="registro.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">
            <?php echo motrarError($_SESSION['errores'], 'nombre'); ?>
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos">
            <?php echo motrarError($_SESSION['errores'], 'apellidos'); ?>
            <label for="email">Email</label>
            <input type="email" name="email">
            <?php echo motrarError($_SESSION['errores'], 'email'); ?>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?php echo motrarError($_SESSION['errores'], 'password'); ?>
            <input type="submit" value="Registrar">
        </form>
    </div>
</aside>