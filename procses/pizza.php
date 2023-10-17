<?php 
include_once("conn.php");
$method = $_SERVER['REQUEST_METHOD'];
//Resgate dos dados, montagem do pedido
if ($method == "GET"){
    $bordasQuery = $conn->query("SELECT * FROM borda;");
    $bordas = $bordasQuery->fetchAll();
    
    $massaQuery = $conn->query("SELECT * FROM massa;");
    $massas = $massasQuery->fetchAll();
    
    $saboresQuery = $conn->query("SELECT * FROM sabor;");
    $sabores = $saboresQuery->fetchAll();
    //criação de pedido
} else if ($method == "POST"){

}