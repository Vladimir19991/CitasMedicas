<?php
// Aquí irían las validaciones de usuario y contraseña en un entorno real
// Se asume que se ha realizado la validación correctamente y se han obtenido los datos del usuario

// Simulación de inicio de sesión exitoso
$username = $_POST['username'];

// Redirigir al usuario a su perfil o página principal después de iniciar sesión
header("Location: profile.php?username=$username");
exit;
?>
