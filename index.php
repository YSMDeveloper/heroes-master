<head>
    <link href="css\home.css" rel="stylesheet" type="text/css">
</head>
<?php include("template/cabecera.php"); ?>
<?php include("template/banner.php"); ?>
<div class="home__container">  
    <div class="home__container-heroes">
        <div class="home__heroes">
            HEROES
        </div>
        <div class="home__heroes-descripcion">
        Aqui podras a ver a todos los heroes de Hero of the Storm  y ademas de sus talentos pasiva y dificultad
        </div>     
        <a class="home__heroes-boton" href="http://localhost/heroes-master/heroes.php">         
            <button class="boton" name="button"><span>Ver Heroes</span></button>
        </a>    
    </div>
    <div class="home__container-campo">
        <div class="home__campo">
            Campo
        </div>
        <div class="home__campo-descripcion">
        Al contrario que otros MOBA, Heroes of the Storm dispone de una amplia selección de campos de batalla, cada uno con misiones y objetivos únicos
        </div>
        <a class="home__guia-boton" href="http://localhost/heroes-master/mapas.php">         
            <button class="boton" name="button"><span>Ver Campos</span></button>
        </a>
    </div>
    <div class="home__container-streamer">
        <div class="home__streamer">
            STREAMER
        </div>
        <div class="home__streamer-descripcion">
           Aqui podras ver los streamer mas famosos de Heroes of the Storm 
        </div>
        <a class="home__streamer-boton" href="http://localhost/heroes-master/streamers.php">>         
            <button class="boton" name="button"><span>Ver Streamer</span></button>
        </a>
    </div>
</div>
<?php include("template/pie.php"); ?>

        