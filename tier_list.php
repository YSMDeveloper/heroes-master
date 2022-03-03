<head>
    <link href="css\tierlist.css" rel="stylesheet" type="text/css">
</head>

<?php 
include("admin/config/db.php");
include("template/cabecera.php");
include("template/banner.php"); 

$sentenciaSQL= $conexion->prepare("SELECT * FROM heroes");
$sentenciaSQL->execute();
$listaHeroes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="tierlist__container">
    <div class="tierlist__container-titulo">
        <div class="tierlist__titulo">
            Lista de niveles de Heroes of the Storm
        </div>
    </div>
    <div class="tierlist__container-tiers">
    <div class="tierlist__container-subtitulo">
        <div class="tierlist__titulo-tiers">
            <div class="tierlist__titulo-tier">
                 Tier S
            </div>
        </div>
</div>
        <div class="tierlist__container-descripcion">
        <div class="tierlist__descriccion-tiers">
            <div class="tierlist__descriccion-letra">
            En este nivel, tenemos una lista de héroes fuertes que deben elegirse antes que el equipo enemigo o prohibirse al comienzo del draft.
            </div>
        </div>
</div>
        <div class="tierlist__tabla-tiers">
            
            <div class="tierlist__tabla-heroe">
                <div class="tierlist__tabla-heroe-imagen">
                <?php foreach($listaHeroes as $heroe) { 
                    if ( $heroe['id_tier'] == '1' )
                    {
                 
                    echo '
                    <div class="tierlist__tabla-heroe-imagen-conteiner">
                        <img class="tierlist__tabla-heroe-imagen-diseño" src='. $heroe['img'].'>
                    </div>';
                } } ?>  
                </div>
            </div>
        </div>
    </div>
    <div class="tierlist__container-tiers">

    <div class="tierlist__container-subtitulo">
        <div class="tierlist__titulo-tiers">
            <div class="tierlist__titulo-tier">
                 Tier A
            </div>
        </div>
            </div>
            <div class="tierlist__container-descripcion">
        <div class="tierlist__descriccion-tiers">
            <div class="tierlist__descriccion-letra-tier">
            Los héroes en el nivel A son buenos todoterrenos que combinan bien con otros en otros niveles.
           Estos héroes constituyen la mayor parte del meta reciente, por lo que muchos jugadores serán decentes al utilizar sus habilidades.
            </div>
        </div>
            </div>
        <div class="tierlist__tabla-tiers">
            
            <div class="tierlist__tabla-heroe">
                <div class="tierlist__tabla-heroe-imagen">
                <?php foreach($listaHeroes as $heroe) { 
                    if ( $heroe['id_tier'] == '2' )
                    {
                
                    echo '
                    <div class="tierlist__tabla-heroe-imagen-conteiner">
                        <img class="tierlist__tabla-heroe-imagen-diseño" src='. $heroe['img'].'>
                    </div>';
                } } ?>  
                </div>
            </div>
        </div>
    </div>
    <div class="tierlist__container-tiers">
    <div class="tierlist__container-subtitulo">
        <div class="tierlist__titulo-tiers">
            <div class="tierlist__titulo-tier">
              Tier B
            </div>
        </div>
            </div>
            <div class="tierlist__container-descripcion">
        <div class="tierlist__descriccion-tiers">
            <div class="tierlist__descriccion-letra-tier">
            En este nivel tenemos una lista de héroes decentes cuyo rendimiento depende en gran medida de la situación en la que se encuentren, por lo que debes pensarlo dos veces antes de elegirlos.
            </div>
        </div>
            </div>
        <div class="tierlist__tabla-tiers">
           
            <div class="tierlist__tabla-heroe">
                <div class="tierlist__tabla-heroe-imagen">
                <?php foreach($listaHeroes as $heroe) { 
                    if ( $heroe['id_tier'] == '3' )
                    {    
                    echo '
                    <div class="tierlist__tabla-heroe-imagen-conteiner">
                        <img class="tierlist__tabla-heroe-imagen-diseño" src='. $heroe['img'].'>
                    </div>';
                } } ?>  
                </div>
            </div>
        </div>
    </div>
   
 <div class="tierlist__container-tiers">
 <div class="tierlist__container-subtitulo">
 <div class="tierlist__titulo-tiers">
            <div class="tierlist__titulo-tier">
            TIER C
            </div>
        </div>
            </div>
            <div class="tierlist__container-descripcion">
        <div class="tierlist__descriccion-tiers">
            <div class="tierlist__descriccion-letra-tier">
  Estos son héroes promedio que no se destacan pero que aún son útiles en la situación y configuración correctas. 
            </div>
        </div>
            </div>
        <div class="tierlist__tabla-tiers">

            <div class="tierlist__tabla-heroe">
                <div class="tierlist__tabla-heroe-imagen">
                <?php foreach($listaHeroes as $heroe) { 
                    if ( $heroe['id_tier'] == '4' )
                    { 
                    echo '
                    <div class="tierlist__tabla-heroe-imagen-conteiner">
                        <img class="tierlist__tabla-heroe-imagen-diseño" src='. $heroe['img'].'>
                    </div>';
                } } ?>  
                </div>
            </div>

        </div>
    </div>
    <div class="tierlist__container-tiers">
    <div class="tierlist__container-subtitulo">
        <div class="tierlist__titulo-tiers">
            <div class="tierlist__titulo-tier">
               Tier D
            </div>
        </div>
            </div>
            <div class="tierlist__container-descripcion">
        <div class="tierlist__descriccion-tiers">
            <div class="tierlist__descriccion-letra-tier">
            En este Tier tenemos una lista de Héroes mediocres que normalmente no vale la pena jugar, a menos que el equipo enemigo no tenga nada que los contrarreste y/o tengas mucha experiencia con ellos.
            </div>
        </div>
            </div>
        <div class="tierlist__tabla-tiers">
          
            <div class="tierlist__tabla-heroe">
                <div class="tierlist__tabla-heroe-imagen">
                <?php foreach($listaHeroes as $heroe) { 
                    if ( $heroe['id_tier'] == '5' )
                    { 
                    echo '
                    <div class="tierlist__tabla-heroe-imagen-conteiner">
                        <img class="tierlist__tabla-heroe-imagen-diseño" src='. $heroe['img'].'>
                    </div>';
                } } ?>  
                </div>
            </div>

        </div>
    </div>
</div>
<?php include("template/pie.php"); ?>