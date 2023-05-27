<?php
// Verificar si el usuario ha iniciado sesión o redirigirlo a la página de inicio de sesión si no ha iniciado sesión
if (!isset($_GET['username'])) {
    header("Location: index.php");
    exit;
}

// Obtener el nombre de usuario del perfil desde la URL
$username = $_GET['username'];
?>

<!DOCTYPE html>
<html>
<head>
     <title>Perfil de <?php echo $username; ?></title>
</head>
<body>
     <h1>Bienvenido, <?php echo $username; ?>!</h1>

     <!-- Aquí puedes agregar más contenido del perfil del usuario -->
</body>
</html>
