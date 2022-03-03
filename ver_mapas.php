<head>
<link href="css\ver_mapas.css" rel="stylesheet" type="text/css">
</head>
<?php 
include("admin/config/db.php");
include("template/cabecera.php");
include("template/banner.php"); 
?>
<?php 

if(isset($_POST['submit'])){
    $idMapa = $_POST['idMapa'];
    $sentenciaSQL= $conexion->prepare("SELECT  * FROM mapas WHERE id_mapa=:id");
    $sentenciaSQL->bindParam(':id',$idMapa);
    $sentenciaSQL->execute();
    $mapa=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $sentenciaSQL2= $conexion->prepare("SELECT  * FROM objetivos_mapas WHERE mapa_id=:id");
    $sentenciaSQL2->bindParam(':id',$idMapa);
    $sentenciaSQL2->execute();
    $listaObjetivos=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
}

?>
<div class="vermapas__container">
<div class="vermapas__container-titulo">
        <div class="vermapas__container-titulo-letra">
            <?php echo $mapa['nombre']; ?>
        </div>
    </div>
    <div class="vermapas__container-mapas">

        <img class="vermapas__mapas-carta-img-estilo" src="<?php echo $mapa['img']; ?>"></img>


    </div>
     
    <div class="vermapas__container-descripcion">
        <div class="vermapas__titulo">

            <div class="vermapas__titulo-letra">


               Descripcion del mapa


            </div>
        </div>
        <div class="vermapas__containerdescripcion">
        <?php echo $mapa['descripcion']; ?>


            </div>
    </div>


    <div class="vermapas__container-objetivos">
        <div class="vermapas__titulo">

            <div class="vermapas__titulo-letra">


                Objetivos del mapa


            </div>
        </div>
        <div class="vermapas__container-lista">
        <?php foreach($listaObjetivos as $objetivo) { ?>
            <div class="vermapas__container-lista-mapa">
                <div class="vermapas__container-lista-mapa-carta">
                    <div class="vermapas__mapa-carta-img">
                        <img class="vermapas__mapa-carta-img-estilo" src="<?php echo $objetivo['img']; ?>"></img>
                    </div>
                    <div class="vermapas__mapa-carta-titulo">
                        <?php echo $objetivo['titulo']; ?>
                    </div>
                    <div class="vermapas__mapa-carta-descripcion">
                        <?php echo $objetivo['descripcion']; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>

    <div class="vermapas__tabla-imagen">
       <div class= "vermapas__1">
       <img class="vermapas__tabla-mapas-imagen-diseño" src="https://static.heroesofthestorm.com/images/battlegrounds/maps/garden-of-terror/screenshots/screenshot-2-9d68b7877b.jpg">
            <img class="vermapas__tabla-mapas-imagen-diseño" src="https://static.heroesofthestorm.com/images/battlegrounds/maps/garden-of-terror/screenshots/screenshot-3-c8b9f80540.jpg">
        </div>
        <div class="vermapas__1">
            
            <img class="vermapas__tabla-mapas-imagen-diseño" src="https://static.heroesofthestorm.com/images/battlegrounds/maps/garden-of-terror/screenshots/screenshot-4-85bb023543.jpg">
            <img class="vermapas__tabla-mapas-imagen-diseño" src="https://static.heroesofthestorm.com/images/battlegrounds/maps/garden-of-terror/screenshots/screenshot-5-5da244902b.jpg">
        </div>
    </div>

</div>


<?php include("template/pie.php"); ?>