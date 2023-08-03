<html>
	<head>
		<title></title>
		<style>
			body
			{
				margin:3%;
				border:1px #04077D;
			}
		</style>
	</head>
	<body style="background-color:#68909c">


<?php
	$conn=new mysqli("localhost","root","","project");
	if($conn->connect_error)
	{
		echo "Connection fail".$conn->connect_error;
	}
	if(isset($_POST['submit']))
	{
		$rno=$_POST['rno'];
		$adno=$_POST['adno'];
		$name=$_POST['name'];
		$m1=$_POST['m1'];
		$m2=$_POST['m2'];
		$m3=$_POST['m3'];
		$sql="INSERT INTO `result`(`rollno`, `admissionno`, `name`, `mark1`, `mark2`, `mark3`) VALUES 
		('$rno','$adno','$name','$m1=$','$m2','$m3')";
		$result=$conn->query($sql);
		if($result==TRUE)
		{
			echo "Inserted Successfully";
			
		}
	}

?>
<h1>Enter the Result </h1>
<form method="POST">
	RollNo:<input type="taxt" id="rno" name="rno" required><br><br>
	Admission Number:<input type="taxt" id="adno" name="adno" required><br><br>
	Name of the student:<input type="taxt" id="name" name="name" required><br><br>
	Mark in subject 1:<input type="taxt" id="m1" name="m1" required><br><br>
	Mark in subject2:<input type="taxt" id="m2" name="m2" required><br><br>
	Mark in subject3:<input type="taxt" id="m3" name="m3" required><br><br>
	<input type="submit" value="Submit" name="submit">
	<input type="reset">
	
</form>
<a href="view.php" >View Result</a>


</body></html>
	
	
	
