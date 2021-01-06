<?php
include "conecta.php";
$nome=$_POST['edNome'];
$telefone=$_POST['edTelefone'];
$email=$_POST['edEmail'];
$endereco=$_POST['edEndereco'];
$numero=$_POST['edNumero'];
$bairro=$_POST['edBairro'];
$cidade=$_POST['edCidade'];
$estado=$_POST['edEstado'];
$data=$_POST['edData'];
$query=mysqli_query($conexao,"insert into cliente values(null,'$nome','$telefone','$email','$endereco',
'$numero','$bairro','$cidade','$estado','$data')");

if ($query) {
    header('Location:cadastro_cliente.php');
}

?>