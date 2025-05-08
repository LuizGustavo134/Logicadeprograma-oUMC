<?php
$serverName = "localhost";
$userName= "root";
$password="";
$dbname="faculdade";
//criando conexao//

$con = new mysql($serverName,$userName,$password,$dbname)

//validando conexao//
if ($conn->conmect_error){
    echo "A conexao falhou"
}
 else {
    "conectado"
 }




?>