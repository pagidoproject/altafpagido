<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/blogg.css">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		
	</style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="container">
				<a href="" class="navbar-brand   font-weight-bold">PAGIDO CONSULTING PVT.LTD </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-left" id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="" class="nav-link text-white">Home</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link text-white">About Us</a>
						</li>
						<li class="nav-item">
							<a href="admin/blog.php" class="nav-link text-white">Blog</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link text-white">Services</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link text-white">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
			
		</nav>
	<div class="container	 blog">
			<div class="row blog">



	<?php


$connect = mysqli_connect("localhost","root","","pagido");
	
if (!$connect) {
die("Not connected : " . mysql_error());
}else{
	echo "";
}

$res=mysqli_query($connect,"SELECT * FROM blog_details"); 

while ($row=mysqli_fetch_assoc($res))
 {


	echo "

			
		<div class= 'col-md-6'>
			<div class='single-blog'>

				<p class='blog-meta'>New Blog<span>".$row['date']."</span></p>
				<img src='".$row['img']."' >
				<h2><a href='#''>".$row['title']."</a></h2>
				<p class='blog-text'>
					".$row['content']."
				</p>
				    <div class='post-info'>
	    <!-- if user likes post, style button differently -->
      	<i
      		  class='fa fa-thumbs-up like-btn'
      	
      		  class='fa fa-thumbs-o-up like-btn'
      	  
      	  data-id=''></i>
      	<span class='likes'></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	
      </div>
				
			</div>
			
		</div> 


			 
";
}
?>
		



</div>
	
		
	</div>
</body>
</html>