<?php
session_start();
$_SESSION['admin']=NULL;
unset($_SESSION);
header("Location: index.php");
?>