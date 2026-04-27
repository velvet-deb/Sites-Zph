<?php
$usuario = $_POST['username'];
// Redirigimos a la página de contraseña llevando el usuario en la URL
header("Location: login-psw.php?user=" . urlencode($usuario));
error_reporting(E_ALL);
exit();
?>