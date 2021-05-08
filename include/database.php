<?php
require 'config.php';

$sql = "Create database smcbi_ims";

if ($connection->query($sql) === true) {
	echo "Database Created!";
}else{
	echo "Failed to Create Database admin_details! : " . mysqli_connect_error();
}

$connection->close();
 ?>