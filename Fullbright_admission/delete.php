<?php
if (isset($_GET["id"])){
	$ID = $_GET["id"];

	$servername = "localhost:3307 ";
	$username = "root";
	$password = "";
    $database = "registration_db";

	$connection = new mysqli($servername, $username, $password, $database);

	$sql = "DELETE FROM students_ WHERE id=$ID";
	$connection->query($sql);
}

header("location: /Fullbright_admission/index.php");
exit;
?>