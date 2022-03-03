$(function ()
{
    get_users();

    $("#selectOpt").on("click",function(){

        get_users();

    })

    $("#selectOpt1").on("click",function(){

        get_users();

    })
}
);

let form = $("#multi-filters");

function get_users()
{
    $.ajax(
        {
            type: "POST",
            url: "heroes_filtros.php",
            data: form.serialize(),
            success: function (data)
            {

                $("#heroeslista").html("");
                console.log("Data", data);
                var string1 = JSON.stringify(data);
                $.each(JSON.parse(string1), function(key, User)
                {
             let row = ""+
                    "<div class='heroes__lista-apartado'> "+  
                    "<button id='enviar' onclick='cargarheroes("+User.id_heroe+");' class='heroes__lista-apartado-btn' > " +
                        "<img class='heroes__lista-apartado-img' src='"+User.img+"' loading='lazy'></img> " +
                    "</button> " +
                    "</div>";  

                    $("#heroeslista").append(row);
                });
            }
        }
    )
}