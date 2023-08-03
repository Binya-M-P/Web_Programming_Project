<html>
	<head>
		<title></title>
		<style>
			body
			{
				margin:3%;
				border:1px #04077D;
			}
			table
			{
				background-color:#f0f2f5;
				width:80%;
				height:50%;
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
	$sql="SELECT * FROM `student`";
	$result=$conn->query($sql);
	echo "<center>";
	echo "<h1><u>STUDENT DETAILS</u></h1><table border=1px solid black;>
		<tr>
			<th>Admission number</th>
			<th>First name No</th>
			<th>Last Name</th>
			<th>Email Id</th>
			<th>Phone number</th>
			<th>dob</th>
			<th>Address</th>
			<th>Parent name</th>
			<th>Parent phno</th>
		</tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr>
				<td>".$row['admissionno']."</td>
				<td>".$row['fname']."</td>
				<td>".$row['lname']."</td>
				<td>".$row['email']."</td>
				<td>".$row['phno']."</td>
				<td>".$row['dob']."</td>
				<td>".$row['address']."</td>
				<td>".$row['parentname']."</td>
				<td>".$row['parentphno']."</td>
			</tr>";
			
				
	}
	echo "</table></center>";
?>

</body></html>
