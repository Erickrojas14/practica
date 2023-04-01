<h1 class="border">Usuarios</h1>
<br>
<?php echo strlen($pagina); ?>
<br>
<form action="login.php" method="post">
    <label for="">Usuario</label>
    <input type="text" name="usuario">
    <label for="">Contraseña</label>
    <input type="text" name="clave">
    <button type="submit">Login</button>
</form>
