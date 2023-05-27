<?php

include ("conection.php");

// Obtener los datos enviados por el formulario de registro
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validar que los campos no estén vacíos
if (empty($name) || empty($email) || empty($username) || empty($password)) {
  // Redirigir al formulario de registro con un mensaje de error
  header("Location: index.php?error=empty_fields");
  exit;
}

// Realizar la conexión a la base de datos
$host = 'localhost'; // Cambia esto con la dirección de tu servidor de base de datos
$dbUsername = 'tu_usuario'; // Cambia esto con tu nombre de usuario de la base de datos
$dbPassword = 'tu_contraseña'; // Cambia esto con tu contraseña de la base de datos
$dbName = 'nombre_de_la_base_de_datos'; // Cambia esto con el nombre de tu base de datos

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Validar el usuario y la contraseña en la base de datos
$query = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
  // El usuario y/o la contraseña no son válidos
  header("Location: index.php?error=invalid_credentials");
  exit;
}

// El usuario y la contraseña son válidos, se puede realizar el registro en la base de datos
// ...

// Cerrar la conexión a la base de datos
mysqli_close($conn);

// Redirigir al usuario a la página de inicio de sesión después del registro exitoso
header("Location: index.php?success=true");
exit;
?>
