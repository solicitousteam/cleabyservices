<?php 
ob_start();
session_start();
include '../db.php'; 
unset($_SESSION['user']);
header("location: login.php"); 
?>