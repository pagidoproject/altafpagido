<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>	

	<div class="login-box">
		<h2>Admin Login</h2>

		<form method="POST" action="login.php">
			<input type="text" name="adminid" placeholder="Admin ID" >

			<input type="password" name="password" placeholder="Password">

			<input type="submit" name="login" value="Login" class="btn">

			<a href="">Forget Password</a>
				


	</form>
		
	</div>


</body>


</html>

<?php
$conn = mysqli_connect("localhost","root","","pagido");
			  // Check connection
		if (!$conn) {
			  die("Connection failed because: " . mysqli_connect_error());
		 }else{
		 	echo "";
		 }
	if(isset($_POST['login']))//button name 'login'
	{
		$id = $_POST['adminid'];
		$password = $_POST['password'];

		$sql = "SELECT * from admin where admin_id='admin' && password='$password'";

		$data = mysqli_query($conn,$sql);

		$total = mysqli_num_rows($data);

		if($total==1)

		{

  			session_start();
  			$_SESSION['login']=$id;
  		
			header('location:/admin/adminpage.php');

				
		}
		else
		{
			echo "<p style='color:white; font-size:30px; margin-left: 35%; margin-top:25px;'>Login Failed Please Try Again !</p>";
		}
	}



?>

