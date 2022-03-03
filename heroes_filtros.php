<?php 
require("admin/config/db.php");

$query_values = $_POST;

$final_query = "";
$final_query2 = "";

if($query_values)
{
    $values = [];
    $queries = [];

    foreach($query_values as $field_name => $field_value)
    {
        foreach($field_value as $value)
        {
            $values[$field_name][] = " {$field_name} = '{$value}'";
        }
    }
    foreach($values as $field_name => $field_values)
    {
        $queries[$field_name] = implode(" OR ", $field_values);
    }
    $final_query.= " WHERE ";
    $final_query.= " ".implode(" AND ", $queries);
    $final_query2.= " WHERE ";
    $final_query2.= " ".implode(" OR ", $queries);
}
$query = "SELECT * FROM heroes".$final_query;
// if($query == "SELECT * FROM heroes WHERE   rol_id = '' AND  universo_id = ''"){
if(strpos($query, "rol_id = ''") || strpos($query, "universo_id = ''")){
    if(strpos($query, "rol_id = ''") && strpos($query, "universo_id = ''")){
        $query = "SELECT * FROM heroes";
        $heroes= $conexion->query($query);
        $heroe_list = [];     
        while($heroe = $heroes->fetch(PDO::FETCH_ASSOC))
        {
            $heroe_list[$heroe["id_heroe"]] = $heroe;
        }
    }else{
        $query = "SELECT * FROM heroes".$final_query2;
        $heroes= $conexion->query($query);

        $heroe_list = [];
        
        while($heroe = $heroes->fetch(PDO::FETCH_ASSOC))
        {
            $heroe_list[$heroe["id_heroe"]] = $heroe;
        }
    }
}else{
    $heroes= $conexion->query($query);

    $heroe_list = [];
    
    while($heroe = $heroes->fetch(PDO::FETCH_ASSOC))
    {
        $heroe_list[$heroe["id_heroe"]] = $heroe;
    }
}

header('Content-Type: application/json');

echo json_encode($heroe_list);
// print_r($heroe_list);

