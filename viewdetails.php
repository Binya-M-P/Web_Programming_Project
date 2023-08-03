<html>
	<head>
		<title></title>
		<style>
			body
			{
				margin:3%;
				border:1px #04077D;
			}
			p
			{
				font-size:125%;
			}
		</style>
	</head>
	<body style="background-color:#68909c">

<?php
include "config.php";

	if(isset($_GET['admissionno']))
	{
			$adno=$_GET['admissionno'];
			
			$sql="SELECT * FROM `student` WHERE `admissionno`='$adno'";
			$result=$conn->query($sql);
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					$adno=$row['admissionno'];
					$fname=$row['fname'];
					$lname=$row['lname'];
					$email=$row['email'];
					$phno=$row['phno'];
					$dob=$row['dob'];
					$address=$row['address'];
					$pname=$row['parentname'];
					$pphno=$row['parentphno'];
					//echo $adno;
				}
				?>
			
					<h1><u>STUDENT DETAILS</u></h1>
					<p>
					Admission Number:<?php echo $adno ?><br><br>
					First Name:<?php echo $fname ?><br><br>
					Last Name:<?php echo $lname ?><br><br>
					Email Id:<?php echo $email ?><br><br>
					Phone Number:<?php echo $phno ?><br><br>
					Date of birth:<?php echo $dob ?><br><br>
					Address:<?php echo $address ?><br><br>
					Parent Name:<?php echo $pname ?><br><br>
					Parent Phone Number:<?php echo $pphno ?><br><br>
					<a href="deletestudentdetails.php?admissionno=<?php echo $adno;?>">Delete student</a>
					</p>
			
				<?php
			}
			else
			{
				echo "There is no details of this student.......!";
			}
			
	}

?>

</body></html>