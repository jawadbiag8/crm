<?php
if(!isset($_SESSION)){
session_start();
}
unset($_SESSION['vendor']);
header('location:login.php');
exit();


?>