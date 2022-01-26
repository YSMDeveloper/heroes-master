<?php 
include("admin/config/db.php");

$id = $_POST['id'];

$sentenciaSQL= $conexion->prepare("SELECT * FROM heroes WHERE id_heroe=:id");
$sentenciaSQL->bindParam(':id',$id);
$sentenciaSQL->execute();
$heroe=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
header('Content-Type: application/json');
//Guardamos los datos en un array
$datos = array(
'estado' => 'ok',
'nombre' => $heroe['nombre'],
'subtitulo' => $heroe['subtitulo'],  
'id' => $heroe['id_heroe'], 
'img' => $heroe['img'],
'img_fondo' => $heroe['img_fondo']
);
//Devolvemos el array pasado a JSON como objeto
echo json_encode($datos, JSON_FORCE_OBJECT);
?>