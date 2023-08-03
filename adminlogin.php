<html>
	<head>
		<title></title>
		<style>
			form
			{
				border:1px solid black;
				width:23%;
				margin:15%;
				background-color:#cad0db;
			}
			input
			{
				font-style:italic;
				font-size:100%;
			}
			label
			{
				font-style:italic;
				text-align:left;
				margin:20%;
			}
			p
			{
				font-size:75%;
			}
			
		</style>
	</head>
	<body background="https://media.nbcboston.com/2020/12/GettyImages-1159577042-1.jpg?quality=85&strip=all&resize=1200%2C675">
	<?php
		include "config.php";
		if(isset($_POST['submit']))
		{
			$un=$_POST['username'];
			$p=$_POST['pw'];
			$sql="SELECT * FROM `admin` WHERE `username`='$un'";
			$result=$conn->query($sql);
			if($result==TRUE)
			{
			
			
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
						$passw=$row['password'];
						if($passw==$p)
						{
							header('Location:view.php');
						}
						else
						{
							?>
							<script>alert("Invalid Data");</script>
							<?php
						}
					}
				}
				?>
					<script>alert("Invalid Username");</script>
				<?php
			}
		}
		
	?>
	
		<form method="POST">
			<center>
				<h1>Login</h1>
			</center>
				<label for="username"><b>User name:</b></label><br>
			<center>
				<input type="text" id="username" name="username"><br><br>
			</center>
				<label for="pw"><b>Password:</b></label><br>
			<center>
				<input type="password" id="pw" name="pw">
				<br><br>
				<input type="submit" value="Login" name="submit">
				<br><br><br><br>
			</center>
		</form>
	</body>
</html>