<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];
$activo = 1;

$query = $con->prepare("SELECT codigo, descripcion, inventariable, stock FROM productos WHERE id=:id AND activo=:activo");
$query->execute(['id'=>$id, 'activo'=>$activo]);
$num = $query->rowCount();

if ($num>0){
    $row = $query->fetch(PDO::FETCH_ASSOC);

}else{
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>
    <link rel="icon" href="img/407826.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="img/418486.png" width="30" height="30" class="d-inline-block align-top" alt=""> ALMACEN INICIO</a>
    </nav>
    <br>
        <div class="p-3 rounded">
            <div class="row">
                <div class="col" >
                    <h4 class="text-primary">NUEVOS REGISTROS</h4>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="row g-3" method="post" action="guardar.php" autocomplete="off">
                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>"required>
                        <div class="col-md-8">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" value="<?php echo $row['codigo']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $row['descripcion']; ?>" required autofocus>
                        </div>
                        <hr>
                        <div class="com-md-12">
                            <div class="form-check">
                                <label for="inventariable" class="form-label">Usa Inventario</label>
                                <input type="checkbox" id="inventariable" name="inventariable" class="form-check-input" value="<?php if($row['inventariable']){echo 'checked';} ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text" id="stock" name="stock" class="form-control" value="<?php echo $row['stock']; ?>" required autofocus>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <a href="index.php" class="btn btn-primary">REGRESAR</a>
                            <button type="submit" class="btn btn-primary" name="registro">GUARDAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>