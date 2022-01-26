<?php
    $host="localhost";
    $bd="heroes";
    $user="root";
    $password="";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");
        return $conexion;
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>