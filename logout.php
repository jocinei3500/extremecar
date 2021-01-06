<?php
Session_Start();
session_destroy();
header('location:index.php');
exit;
?>