<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO REGISTROS</title>
    <link rel="icon" href="img/407826.png">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contendor">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="img/418486.png" width="30" height="30" class="d-inline-block align-top" alt=""> ALMACEN INICIO</a>
    </nav>
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4 class="text-primary">NUEVO REGISTROS</h4>
                </div>
                <div class="row">
                    <div class="col">
                        <form action="row g-3" method="post" action="guardar.php" autocomplete="off">
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control"  required autofocus>
                        </div>
                        <hr>
                        <div class="col-md-8">
                            <label for="stock" class="form-label">EXISTENCIA</label>
                            <input type="text" id="stock" name="stock" class="form-control" required autofocus>
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
        </div>
    </main>
    
</body>
</html>