<?php

	$con = mysqli_connect("localhost", "root"," ","cognify");

	if (!$con) 
	{
		echo("Connection failed: " . mysqli_connect_error());
	}
?>