<head>
<link href="css\ver-heroe.css" rel="stylesheet" type="text/css">
</head>
<?php include("template/cabecera.php");?>
<?php include("template/banner.php");?>
<?php 
include("admin/config/db.php");

if($_GET){
    if (isset($_GET['idh'])) {
        if ($_GET['idh']) {
            $id = $_GET['idh'];
            $sentenciaSQL= $conexion->prepare("SELECT * FROM heroes WHERE id_heroe=:id");
            $sentenciaSQL->bindParam(':id',$id);
            $sentenciaSQL->execute();
            $heroe=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
            
            $sentenciaSQL2= $conexion->prepare("SELECT * FROM habilidades WHERE heroe_id=:id");
            $sentenciaSQL2->bindParam(':id',$id);
            $sentenciaSQL2->execute();
            $listaHabilidades=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
            
            $sentenciaSQL3= $conexion->prepare("SELECT * FROM heroica WHERE heroe_id=:id");
            $sentenciaSQL3->bindParam(':id',$id);
            $sentenciaSQL3->execute();
            $listaHeroicas=$sentenciaSQL3->fetchAll(PDO::FETCH_ASSOC);
            
            $nombreHeroe = $heroe['nombre'];
            $descripcionHeroe = $heroe['descripcion'];
            $danoHeroe = $heroe['dano'];
            $sobrevivenciaHeroe = $heroe['sobrevivencia'];
            $dificultadHeroe = $heroe['dificultad'];
            $utilidadHeroe = $heroe['utilidad'];
            $imgHeroe = $heroe['img'];
        }else{
            header("Location:404.php");
        }
        
    }else{
        header("Location:404.php");
    }
    
}else{
    header("Location:404.php");
}
?>
    <div class="ver-heroe__container">
        <div class="ver-heroe__info">
            <div class="ver-heroe__info-nombre ver-heroe__centrado">
            <?php echo $nombreHeroe ?>
            </div>
            <div class="ver-heroe__info-perfil">      
                <div class="ver-heroe__info-perfil-img" style="background-image: url(<?php echo $imgHeroe ?>);">
                    
                </div>
                <div class="ver-heroe__info-perfil-descripcion ver-heroe__centrado">
                <?php echo $descripcionHeroe ?>
                </div>
            </div>
        </div> 
        <div class="ver-heroe__estadisticas"> 
            <div class="ver-heroe__estadisticas-datos">      
                <div class="ver-heroe__estadisticas-datos-dano ver-heroe__habilidades-habilidades">
                    <div class="ver-heroe__estadisticas-datos-img">
                        DAÑO 
                    </div>
                    <div class="ver-heroe__estadisticas-datos-cantidad">
                        <?php
                        $x = 0;
                            while($x <= $danoHeroe) {
                                echo "<div class='ver-heroe__estadisticas-datos-cantidad-puntos'>
                                </div>";
                                $x++;
                            }
                        ?>
                    </div>
                </div>
                <div class="ver-heroe__estadisticas-datos-utilidad ver-heroe__habilidades-habilidades">
                    <div class="ver-heroe__estadisticas-datos-img">                  
                        UTILIDAD
                    </div>
                    <div class="ver-heroe__estadisticas-datos-cantidad">
                        <?php
                            $u = 0;
                                while($u <= $utilidadHeroe) {
                                    echo "<div class='ver-heroe__estadisticas-datos-cantidad-puntos'>
                                    </div>";
                                    $u++;
                                }
                        ?>
                    </div>
                </div> 
                <div class="ver-heroe__estadisticas-datos-supervivencia ver-heroe__habilidades-habilidades">
                    <div class="ver-heroe__estadisticas-datos-img">      
                    SOBREVIVENCIA 
                    </div>
                    <div class="ver-heroe__estadisticas-datos-cantidad">
                        <?php
                            $s = 0;
                                while($s <= $sobrevivenciaHeroe) {
                                    echo "<div class='ver-heroe__estadisticas-datos-cantidad-puntos'>
                                    </div>";
                                    $s++;
                                }
                        ?>
                    </div>
                </div>
                <div class="ver-heroe__estadisticas-datos-complejidad ver-heroe__habilidades-habilidades">
                    <div class="ver-heroe__estadisticas-datos-img">                    
                        DIFICULTAD
                    </div>
                    <div class="ver-heroe__estadisticas-datos-cantidad">           
                        <?php
                            $d = 0;
                                while($d <= $dificultadHeroe) {
                                    echo "<div class='ver-heroe__estadisticas-datos-cantidad-puntos'>
                                    </div>";
                                    $d++;
                                }
                        ?>
                    </div>
                </div>   
            </div> 
            <div class="ver-heroe__estadisticas-rol">
                <div class="ver-heroe__estadisticas-rol-titulo ver-heroe__centrado"> 
                    ROL
                </div>
                <div class="ver-heroe__estadisticas-rol-img ver-heroe__centrado">
                ASESINO DE LARGO ALCANCE
                </div>
            </div>
            <div class="ver-heroe__estadisticas-universo">
                <div class="ver-heroe__estadisticas-universo-titulo ver-heroe__centrado">  
                    UNIVERSO
                </div>
                <div class="ver-heroe__estadisticas-universo-img ver-heroe__centrado">
                </div>
            </div>  
        </div> 
        <div class="ver-heroe__habilidades">
            <div class="ver-heroe__habilidades-basicas">      
                <div class="ver-heroe__habilidades-basicas-titulo ver-heroe__centrado">    
                    BÁSICAS
                </div> 
                <div class="ver-heroe__habilidades-basicas-habilidades">
                    <?php foreach($listaHabilidades as $habilidades) { ?>
                        <div class="ver-heroe__habilidades-basicas-habilidades-container">
                            <div class="ver-heroe__habilidades-basicas-habilidades-container-titulo">              
                            <?php echo $habilidades['nombre']; ?>
                            </div>
                            <div class="ver-heroe__habilidades-basicas-habilidades-container-descripcion">         
                            <?php echo $habilidades['descripcion']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div> 
            </div> 
            <div class="ver-heroe__habilidades-heroicas">     
                <div class="ver-heroe__habilidades-heroicas-titulo ver-heroe__centrado">         
                    HEROICAS
                </div> 
                <div class="ver-heroe__habilidades-heroicas-habilidades">
                    <?php foreach($listaHeroicas as $heroicas) { ?>
                        <div class="ver-heroe__habilidades-basicas-habilidades-container">    
                            <div class="ver-heroe__habilidades-basicas-habilidades-container-titulo">                            
                                <?php echo $heroicas['nombre'] ?>
                            </div>
                            <div class="ver-heroe__habilidades-basicas-habilidades-container-descripcion"> 
                            <?php echo $heroicas['descripcion'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </div> 
            </div>
        </div> 
    </div> 
<?php include("template/pie.php");?>