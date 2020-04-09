<?php 
session_start();
//unset($_SESSION["kim"]);
session_destroy();
header("location:login.php");