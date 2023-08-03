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
				width:70%;
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
	echo "<h1>Result</h1>";
	
	
	
	echo "<table border=1px solid black;>
		<tr>
			<th>RollNo</th>
			<th>Admission No</th>
			<th>Name</th>
			<th>Mark1</th>
			<th>Mark2</th>
			<th>Mark3</th>
			<th></th>
			<th></th>
			<th></th>
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
				<td><a href="update.php?rollno=<?php echo $row['rollno'];?>">Edit</a></td>
				<td><a href="delete.php?rollno=<?php echo $row['rollno'];?>">Delete</a></td>
				<td><a href="viewdetails.php?admissionno=<?php echo $row['admissionno'];?>">View Details</a></td>
			</tr>
			<?php
				
	}
	echo "</table>";
	
	?>
		<br><a href="aresult.php"><b>ADD RESULT</b></a><br>
		<a href="studentdetails.php" ><b>STUDENT DETAILS</b></a>
	<?php
	
	echo "</center>";
?>


</body></html>
