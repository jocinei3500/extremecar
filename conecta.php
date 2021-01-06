<?php
$host="localhost";
$user="root";
$password="";
$schema="oficina";
$conexao=mysqli_connect($host,$user,$password,$schema);
if (!$conexao) {
    die("Conexão com o banco falhou: " . mysqli_connect_error());
}

?>