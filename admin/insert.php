
<?php

$connect = mysqli_connect("localhost","root","","pagido");
if($connect){
    echo "Connected";
}

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["insert"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
   
    $title = $_POST['title'];
     $author = $_POST['author'];
      $content = $_POST['content'];

    $sql = "insert into blog_details (title,author,content ,img,date) values('$title','$author','$content','$target_file',now())";

    if (mysqli_query($connect, $sql)) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }


    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
mysqli_close($connect);
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/adminpage.css">


	<title></title>
	<style type="text/css">


	.insert form{
		margin: 20px;
		width: 300px;
		color: steelblue;
		text-align: center;
	}

	.insert input{
		padding: 10px;
		font-size: inherit;
	}

	.insert input[type="text"]
	{
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border : 2px solid steelblue;
		background:#FAF6D9;
	}
	.insert input[type="submit"]{
		width: 300px;
		height: 45px;
		border: none;
		background: steelblue;
		color: #fff;
	}

		.insert input[type="submit"]:focus{
		width: 344px;
		height: 45px;
		border: none;
		background:#00E6FF;
		color: #000;
	}

	.insert input:focus{
		background:#fff;
	}


/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 500px) {
		.insert input[type="submit"]{
			width: auto;
		}

				.insert input[type="submit"]:focus{
		width: auto;
	}
	.insert form{
		width: auto;
	}

} 

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 500px) {
		.insert form{
		width: auto;
	}

			.insert input[type="submit"]{
			width: auto;
		}

				.insert input[type="submit"]:focus{
		width: auto;
	}
} 

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
		.insert form{
		width: auto;
	}

			.insert input[type="submit"]{
			width: auto;
		}

				.insert input[type="submit"]:focus{
		width: auto;
	}
} 

}


	</style>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

	<?php
	include("adminpage.php");
	?>

<div class="insert" align="center" >

	<h2>Insert the Blog details</h2>
		<form method="POST" action="insert.php" enctype="multipart/form-data" >

		<input class="form-control" type="text" placeholder="Enter Title" name="title">

		<input class="form-control" type="text" placeholder="Author Name" name="author">

		<input class="form-control " type="text" placeholder="Type your Content" name="content">

		 <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">

		<input class="form-control" type="submit" name="insert" value="Insert" id="upload">
		

	</form>
</div>

</body>
</html>

<script>
    
    $(document).ready(function(){

    	//#uplaod is buttons id

        $('#upload').click(function(){
            var image_name = $('#fileToUpload').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#fileToUpload').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Inavlid Image extension');
                    $('#fileToUpload').val('');
                    return false;
                }
            }
        });
    });
</script>