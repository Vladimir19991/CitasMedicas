<!DOCTYPE html>
<html>
<head>
  <title>Página de Citas Médicas</title>
  <link rel="stylesheet" href="style.css">
</head>
        <body>
                <h1>Página de Citas Médicas</h1>

                <h2>Inicio de Sesión</h2>
        <form action="login.php" method="POST">
                    <label for="username">Usuario:</label>
                    <input type="text" name="username" id="username" required><br><br>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" required><br><br>

                    <input type="submit" value="Iniciar Sesión">
        </form>

                <h2>Registro</h2>
        <form action="registro.php" method="POST">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" required><br><br>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" name="email" id="email" required><br><br>

                    <label for="username">Usuario:</label>
                    <input type="text" name="username" id="username" required><br><br>

                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" required><br><br>

                    <input type="submit" value="Registrarse">

        </form>


        <?php
                include ("registro.php");

        ?>

        
</body>
</html>
