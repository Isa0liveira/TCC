<?php
$host = "localhost: 3307";
$user = "root";
$pass = "";
$dbname = "dg";

try{
    $conn = new PDO("mysql:host=$host; dbname=". $dbname, $user, $pass);
   //echo "conexão REALIZADA";
}catch(PDOException $err){
    //echo "conexão não realizada. erro" . $err->getMessage();
}

?>