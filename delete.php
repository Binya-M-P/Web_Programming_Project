<?php
	include "config.php";
	if(isset($_GET['rollno']))
	{
		$rno=$_GET['rollno'];
		$sql="DELETE FROM `result` WHERE `rollno`='$rno'";
		$result=$conn->query($sql);
		if($result==TRUE)
		{
			echo "Deleted successfully";
			//header('Location:aresult.php');
		}
		else
		{
			echo "error";
		}
	}
?>