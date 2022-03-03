<head>
    <link href="css\error.css" rel="stylesheet" type="text/css">

</head>
<?php include("template/cabecera.php"); ?>

<div class="error__container">
    <div class="error__mensaje">
        <div class="error__mensaje-header">
            UPS...
        </div>
        <div class="error__mensaje-body">
            Creo que la tormenta lo ha llevado a un sitio equivocado.
        </div>
        <div class="error__mensaje-pie">
            Será redireccionado en <label id="counter">5</label> segundos...
        </div>
    </div>
</div>
<script>
setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.replace("http://localhost/heroes-master/index.php");
            }
        }, 1000);
</script>
<?php include("template/pie.php"); ?>