<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query = $con->prepare("DELETE FROM productos WHERE id=?");
$query ->execute(['id']);
$eliminado = $query->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR</title>
    <link rel="icon" href="img/418486.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounder">
            <div class="row">
                <div class="col">
                    <?php if($eliminado>0){ ?>
                        <h3>Registro Eliminado</h3>
                        <?php } else { ?>
                            <h3>Tienes Un Error</h3>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                 <a href="btn btn-primary" href="index.php">Atras</a>           
                </div>
            </div>
        </div>
    </main>
</body>
</html>