<?php

//open session for this page

error_reporting(0); 


//if session variable is there than the following will execute
if(isset($_SESSION['login'])){  

	$conn = mysqli_connect("localhost","pagido","pagido1234","pagido");
        // Check connection
    if (!$conn) {
        die("Connection failed because: " . mysqli_connect_error());
     }else{
      echo "";
     }

//taking the session variable in a new variable
$adminprofile=$_SESSION['login'];


//with the new variable we can find the admin_id, with the help of the admin_id we can get all the details of the admin
$sql = "SELECT * from admin where admin_id='$adminprofile'";

    $data = mysqli_query($conn,$sql);

    $result=mysqli_fetch_assoc($data);


// we are also displaying the admin name for welcoming with the help of $adminprofile

    echo "<b>Welcome ".$result['Name']."</b>";


?>




 <?php
} //closing the bracket here so that the logout is not visible if session is not Present
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminpage.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1>Welcom to Pagido Admin Side</h1>

<div class="menu">
    
    <div class="btn"><a href='insert.php'>Insert</a></div>
      <div class="btn"><a href='editblog.php'>Edit Blog</a></div>
     <div class="btn"><a href='blog.php'>View Blog</a></div>
        <div class="btn"><a href='logout.php'>Logout</a></div>
</div>


</body>
</html>



