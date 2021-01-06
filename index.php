<?php
session_start();
if (isset($_SESSION['logado'])) {
    header("location:inicio.php");
}
else{
    header("location:login.php");
}
?>