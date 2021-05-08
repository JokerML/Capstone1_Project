<?php

$connection = new mysqli ("localhost", "root", "", "smcbi_ims");

if ($connection->connect_error) {
	echo "Connection Failed! : " . $connection->connect_error;
	}else{
		//echo "Connected Successfully!";
	}
 ?>