<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";
// $servername = "localhost";
// $username = "u481847985_mmnf_users";
// $password = "Z#ep+/Uwoz84";
// $dbname = "u481847985_mmnf_datab";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}