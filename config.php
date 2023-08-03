<?php
	$conn=new mysqli("localhost","root","","project");
	if($conn->connect_error)
	{
		echo "Connection fail".$conn->connect_error;
	}
?>