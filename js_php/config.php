<?php
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqLi($dbHost, $dbUsername, $dbPassword, $dbName );

/*if($conexao->connect_errno){
    echo "erro";
}else{
    echo "conexao efetuada com sucesso";
}*/



?>