<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["full_name"]);
header("Location:login.php");
?>