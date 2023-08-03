<?php
	include "config.php";
	if(isset($_GET['admissionno']))
	{
		$ano=$_GET['admissionno'];
		$sql="DELETE FROM `student` WHERE `admissionno`='$ano'";
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
		$sql="DELETE FROM `result` WHERE `admissionno`='$ano'";
		$result=$conn->query($sql);
	}
	else{
		echo "no such an student";
	}
?>