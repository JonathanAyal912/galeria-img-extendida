<?php
    session_start();
    if (isset($_GET["id"])){
        // Mostrar cuenta si es que existe
        $nombreDeUsuario = "Default";
    }
    else{
        if (isset($_SESSION["logueado"])){
            // Mostrar perfil propio
        }
        else{
            header("Location: ../login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo "<title>" . $nombreDeUsuario . "</title>";
    ?>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/archivos.js" defer></script>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
    <nav>
        <h1>test</h1>
        <ul>
            <li><a href="galeria.php?pag=1">Galería</a></li>
            <li><a href="subir.php">Subir</a></li>
            <li><a href="perfiles.php">Usuarios</a></li>
        </ul>
        <div class="nav-cuenta">
            <a href="php/cuenta.php" id="cuenta">Invitado</a>
        </div>
    </nav>
    <header>
        <div class="perfil-div">
            <div class="perfil-banner">
                <p>User</p>
            </div>
        </div>
    </header>
</body>
</html>
