
<head>
<link href="css\mapas.css" rel="stylesheet" type="text/css">
</head>
<?php 
include("admin/config/db.php");
include("template/cabecera.php");
include("template/banner.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM mapas");
$sentenciaSQL->execute();
$listaMapas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="mapas__container">
    <div class="mapas__container-titulo">
        <div class="mapas__titulo">
            CAMPOS DE BATALLA
        </div>
    </div>
    <div class="mapas__container-lista">
        <?php foreach($listaMapas as $mapa) { ?>
                <form action="ver_mapas.php" method="POST" enctype="multipart/form-data" class="mapas__container-lista-mapa">
                    <button name="submit" class="mapas__container-lista-mapa-carta">
                        <div class="mapas__mapa-carta-img" >
                            <img class="mapas__mapa-carta-img-estilo" src="<?php echo $mapa['img']; ?>"></img>
                        </div>
                        <div class="mapas__mapa-carta-titulo">
                            <?php echo $mapa['nombre']; ?>
                        </div>
                        <div class="mapas__mapa-carta-descripcion"> 
                        <?php echo $mapa['descripcion']; ?>
                        </div>
                        <input class="mapas-input" name="idMapa" value="<?php echo $mapa['id_mapa']; ?>"></input>
                    </button>
                </form>
        <?php } ?>   
    </div>
</div>
<?php include("template/pie.php");?>