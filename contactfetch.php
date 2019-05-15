<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>


	<div class="container pt-5 text-warning">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone:</th>
        <th>Enquiry</th>
          <th>city</th>
      </tr>
    </thead>
    <tbody>
    	<?php
include("connection.php");

$sql = mysqli_query($conn,"SELECT * FROM contactform");


while($data=mysqli_fetch_array($sql))
{ 

	?>
	
      <tr>
        <td><?php echo "".$data['name1']."";?></td>
        <td><?php echo "".$data['email1']."";?></td>
        <td><?php echo "".$data['phone1'].""; ?></td>
        <td><?php echo "".$data['query']."";?></td>
        <td><?php echo "".$data['city1']."";  }  ?></td>
      </tr>


    </tbody>
  </table>


</div>


</body>
</html>


