<head>
<link href="css\heroes.css" rel="stylesheet" type="text/css">
</head>
<?php 
include("admin/config/db.php");
include("template/cabecera.php");
include("template/banner.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM heroes");
$sentenciaSQL->execute();
$listaHeroes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$rol = 'Todos';
$universo = 'Todos';

?>
<?php $nombreHeroe = "Hogger"?>
<div class="heroes__container">
    <div class="heroes__container-titulo">
        <div class="heroes__titulo">
            HEROES
        </div>
    </div>
    <form class="heroes__container-filtros" id="multi-filters">
        <div class="heroes__container-filtros-ru">
            <div class="heroes__container-filtros-rol-titulo heroes__lista-centrado">
                ROL
            </div>
            <div class="heroes__container-filtros-rol-opciones">
                <select id="selectOpt" name="rol_id[]">    
                    <option value="">Todos</option>    
                    <option value="4">Sanador</option>    
                    <option value="5">ALA</option>    
                    <option value="6">ACA</option>    
                    <option value="1">Tanque</option>    
                    <option value="2">Luchador</option>   
                    <option value="3">Apoyo</option>   
                </select>
            </div>  
        </div>
        <div class="heroes__container-filtros-ru">
            <div class="heroes__container-filtros-rol-titulo heroes__lista-centrado">
                UNIVERSO
            </div>
            <div class="heroes__container-filtros-rol-opciones">
                <select id="selectOpt1" name="universo_id[]">    
                    <option value="">Todos</option>    
                    <option value="1">Warcraft</option>    
                    <option value="2">Starcraft</option>    
                    <option value="3">Diablo</option>    
                    <option value="4">Overwatch</option>    
                    <option value="5">Nexo</option>   
                </select>
            </div>   
        </div>
</form>
    <div class="heroes__container-lista">
        <div id="heroeslista" class="heroes__container-lista-heroes">

        </div>
        <div class="heroes__container-lista-perfil">
            <div class="heroes__container-lista-perfil-carta">
                
                    <div class="heroes__lista-perfil-carta-img">
                        <img id="img"  class="heroes__lista-apartado-img" src="https://bnetcmsus-a.akamaihd.net/cms/blog_header/iu/IU9RX8HPGW131605649378015.jpg"></img>
                    </div>
                    <div id="nombre" class="heroes__lista-perfil-carta-titulo heroes__lista-centrado">
                        Hogger
                    </div>
                    <div id="subtitulo" class="heroes__lista-perfil-carta-descripcion heroes__lista-centrado">
                        Líder de los gnolls Zarparrío
                    </div>
                    <form action="ver-heroe.php" method="GET" class="heroes__lista-perfil-carta-mas">
                        <input type="hidden" id="idHeroe" name="idh" value="1"></input>
                        <button type="submit" class="heroes__lista-perfil-carta-btn">Mas Información</button>
       
                    </form>
            </div>
        </div>
    </div>
</div>
<script> 
    function cargarheroes(id){
        $.ajax({
            type:'POST',
            url: 'heroes_data.php',
            data: "id="+id,
            })
        .done(function(res){
            // $('#idHeroe').html(res.id);
            document.getElementById("idHeroe").value=res.id;
            $('#nombre').html(res.nombre);
            $('#subtitulo').html(res.subtitulo);    
            console.log(document.getElementById("idHeroe").value);       
            document.getElementById("img").src=res.img_fondo;
        })
        
    }


</script>
<script src="js/heroes.js"></script>
<?php include("template/pie.php"); ?>
