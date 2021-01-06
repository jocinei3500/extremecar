<?php
include 'conecta.php';
$email=$_POST['email'];
$senha=$_POST['password'];
$query = "SELECT * FROM USUARIO WHERE SENHA='$senha' and email='$email'";
$validaUser = mysqli_query($conexao, $query);
if (mysqli_num_rows($validaUser) > 0) {
    $valores = mysqli_fetch_array($validaUser);
    session_start();
    $_SESSION['email'] = $valores['email'];
    $_SESSION['senha'] = $valores['senha'];
    $_SESSION['logado'] = 'OK';
    header('Location:inicio.php');
} else {
    header('Location:login.php');
}
?>

