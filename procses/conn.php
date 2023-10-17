<?php
/* Usaremos PDO para fazer a conexão com banco */
session_start(); /*PHP inicia uma sessão de usuario */

$user="root";
$pass="";
$db="pizzaria";
$host="localhost";

try{
    // Código que pode iniciar exceções
    $conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);
     /*habilitar os erros*/ 
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}catch(PDOException $e){
    printf("Error " . $e->getMessage() . "<br/>");
    die();
}