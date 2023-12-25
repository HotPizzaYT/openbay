<?php
if(isset($_GET["id"])){
    $jsonraw = file_get_contents("db/".$_GET["id"].".json");
    $jsonf = json_decode($jsonraw, true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($jsonf);
}
?>