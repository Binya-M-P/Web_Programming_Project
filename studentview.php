<html>
	<head>
		<title></title>
		<style>
			body
			{
				margin:2%;
				border:2px solid black;
			}
			table
			{
				background-color:#f0f2f5;
				width:80%;
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
	$sql="SELECT * FROM `result`";
	$result=$conn->query($sql);
	echo "<center>";
	echo "<h1>Result</h1><table border=1px solid black;>
		<tr>
			<th>RollNo</th>
			<th>Admission No</th>
			<th>Name</th>
			<th>Mark1</th>
			<th>Mark2</th>
			<th>Mark3</th>
		</tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr>
				<td>".$row['rollno']."</td>
				<td>".$row['admissionno']."</td>
				<td>".$row['name']."</td>
				<td>".$row['mark1']."</td>
				<td>".$row['mark2']."</td>
				<td>".$row['mark3']."</td>"?>
			</tr>
			<?php
				
	}
	echo "</table></center>";
?>

</body></html>
