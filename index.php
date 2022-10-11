<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$activo = 1;

$comando = $con->prepare("SELECT id, codigo, descripcion, stock FROM productos WHERE activo=:mi_activo ORDER BY codigo ASC");
$comando->execute(['mi_activo'=>$activo]);
$resultado = $comando->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALMACEN</title>
    <link rel="icon" href="img/407826.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class= "py-3">
    <main class= "container contenedor">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="img/418486.png" width="30" height="30" class="d-inline-block align-top" alt=""> ALMACEN</a>
    </nav>
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-primary" >PRODUCTOS
                        <a href="registrar.php" class="btn btn-outline-primary float-right">AGREGAR</a>
                    </h4>
                </div>
            </div>
            <div class="row py-p3">
                <div class="col"><hr>
                    <table class="table table-striped table-info">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Stock</th>
                                <th>ACTUALIZAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($resultado as $row){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['codigo'] ?></td>
                                <td><?php echo $row['descripcion'] ?></td>
                                <td><?php echo $row['stock'] ?></td>
                                <td><a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Editar</a></td>
                                <td><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Eliminar</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>

