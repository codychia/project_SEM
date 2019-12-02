<?php
session_start();
$servername = "localhost";
$server_user = "debian-sys-maint";
$server_pass = "zeSFK9hTflSrAm1E";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>