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
include "config.php";

	if(isset($_POST['update']))
	{
		$rollno=$_POST['rno'];
		$adno=$_POST['adno'];
		$name=$_POST['name'];
		$m1=$_POST['m1'];
		$m2=$_POST['m2'];
		$m3=$_POST['m3'];
		$sql="UPDATE `result` SET `rollno`='$rollno',`admissionno`='$adno',`name`='$name',`mark1`='$m1',
		`mark2`='$m2',`mark3`='$m3' WHERE `rollno`='$rollno'";
		$result=$conn->query($sql);
		if($result==TRUE)
		{
			header('location:view.php');
		}
		else
		{
			echo "faild";
		}
		
	}

	if(isset($_GET['rollno']))
	{
		$rollno=$_GET['rollno'];
		$sql="SELECT * FROM `result` WHERE `rollno`='$rollno'";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$rollno=$row['rollno'];
				$adno=$row['admissionno'];
				$name=$row['name'];
				$m1=$row['mark1'];
				$m2=$row['mark2'];
				$m3=$row['mark3'];
			}
			
			?>
			
			
			<form method="POST">
				RollNo:<input type="taxt" id="rno" name="rno" value="<?php echo $rollno ?>"><br><br>
				Admission Number:<input type="taxt" id="adno" name="adno" value="<?php echo $adno ?>"><br><br>
				Name of the student:<input type="taxt" id="name" name="name" value="<?php echo $name ?>"><br><br>
				Mark in subject 1:<input type="taxt" id="m1" name="m1" value="<?php echo $m1 ?>"><br><br>
				Mark in subject2:<input type="taxt" id="m2" name="m2" value="<?php echo $m2 ?>"><br><br>
				Mark in subject3:<input type="taxt" id="m3" name="m3" value="<?php echo $m3 ?>"><br><br>
				<input type="submit" value="update" name="update">
				<input type="reset">
			</form>
			
			<?php
			
		}
	}

?>

</body></html>