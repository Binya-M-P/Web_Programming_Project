<html>
	<head>
		<title>STUDENT REGISTRATON FORM</title>
		<style>
			h1
			{
				text-align:center;
			}
			h2
			{
				font-style:italic;
				font-size:175%;
			}
			input
			{
				font-size:100%;
				font-style:italic;
				background-color:#cad0db;
			}
			textarea
			{
				background-color:#cad0db;
			}
			label
			{
				font-size:125%
			}
			body
			{
				margin:3%;
				border:1px #04077D;
			}
		</style>
	</head>
	<body style="background-color:#68909c">
		<h1>Students Registration</h1>
		
		<?php
			$conn=new mysqli("localhost","root","","project");
			if($conn->connect_error)
			{
				echo "Connection fail".$conn->connect_error;
			}
			//echo "enter";
			if(isset($_POST['submit']))
			{
				$adno=$_POST['adno'];
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$phno=$_POST['pno'];
				$dob=$_POST['dob'];
				$address=$_POST['address'];
				$pname=$_POST['pname'];
				$mphno=$_POST['mpno'];
				$password=$_POST['password'];
				$sql="INSERT INTO `student`(`admissionno`, `fname`, `lname`, `email`, `phno`, `dob`, `address`, `parentname`, `parentphno`,`password`) VALUES 
				('$adno','$fname','$lname','$email','$phno','$dob','$address','$pname','$mphno','$password')";
				$result=$conn->query($sql);
				if($result==TRUE)
				{
					header('Location:studentlogin.php');
				}
			}
		?>
		
		
		
		
		<form id="form" name="form" onsubmit="validation()" method="POST">
		<h2>Basic Information</h2>
		<label>Full Name :</label>
		<input type="taxt" id="fname" name="fname" required>
		<input type="taxt" id="lname" name="lname" required><br><br>
		
		<label for="pno">Mobile Number :</label>
		<input type="text" id="pno" name="pno" value="+91" required><br><br>
		
		<label for="email">E-mail :</label>
		<input type="email" id="email" name="email"><br><br>
		
		<label for="dob">Birth Date :</label>
		<input type="date" id="dob" name="dob" required><br><br>
		
		
		<label>Admission number :</label>
		<input type="taxt" id="adno" name="adno" required><br><br>
		
		
		<h3>PERMENENT ADDRESS</h3>
		<textarea name="address" rows="8%" cols="30%" required></textarea><br>

		
		<label>Parent Name :</label>
		<input type="taxt" id="pname" name="pname" required>
		<label for="mpno">Mobile Number :</label>
		<input type="text" id="mpno" name="mpno" value="+91" required><br><br>
		
		<label>Password :</label><input type="password" name="password" id="password" required>
		<label>Confirm Password : </label><input type="password" name="cpassword" id="cpassword" required><br><br>
		
		<input type="submit" value="Submit" name="submit">
		<input type="reset">
		</form>
	</body>
</html>