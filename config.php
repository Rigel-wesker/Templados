<?php
    $host ="127.0.0.1";
    $usuariodb="bernabe";
    $password="g4qTqqiHwq6s5nwV";
    $nombredb="templados";
    $dsn="mysql:host=$host;dbname=$nombredb";

try {
    $conexion =new PDO($dsn, $usuariodb, $password);
    //echo "Conexion exitosa";
} catch (PDOExecption $th) {
    echo $th->getMessage();
}

?>