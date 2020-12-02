<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "cv";

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn)
{
    die("Koneksi meninggoy :".mysqli_connect_error());
}
?>