 <!--?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'pagido');

	// initialize variables
	$name1 = "";
	$email1 = "";
	$phone1 = "";
	$query = "";
	$city1 = "";
	$id = "0";

	

	if (isset($_POST['submit'])) {
		$name1 = $_POST['name1'];
		$email1 = $_POST['email1'];
		$phone1  = $_POST['phone1'];
		$query = $_POST['query'];
		$city1 = $_POST['city1'];
	
	$sql =	mysqli_query($db, "INSERT INTO contactform (name1, email1,phone1,query,city1) VALUES ('$name1', '$email1','$phone1','$query',$city1')"); 
		$_SESSION['msg1'] = "Address saved"; 
		header('location: index.php');
	}
?-->


<?php
$servername = "localhost";
$username = "pagido";
$password = "pagido1234";
$dbname = "pagido";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



	if (isset($_POST['submit'])) {



	$name1 = $_POST['name1'];
		$email1 = $_POST['email1'];
		$phone1  = $_POST['phone1'];
		$query = $_POST['query'];
		$city1 = $_POST['city1'];
		
	
$sql = "INSERT INTO contactform  (name1, email1,phone1,query,city1)
VALUES ('$name1', '$email1','$phone1','$query','$city1')";



mysqli_close($conn);
header("location:index.php");
?>