<?php

require_once 'dataPDO.php'; #traer los variables para conectar la base de datos en dataPDO

#try nos permite la conexion a la base de datos
try {
    $conexion = new PDO('mysql:host=$server;dbname=$database',$user, $pass);
} catch (PDOException $pe) {
    die(print "Error: ".$pe->getMessage()); #die es matar el codigo
}


?>