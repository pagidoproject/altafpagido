<?php  include('edit.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$blog_id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM blog_details WHERE blog_id=$blog_id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$title = $n['title'];
			$author = $n['author'];
			$content = $n['content'];
			$img = $n['img'];
			$date = $n['date'];

		}
	}
?>



<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/adminpage.css">

	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>

		<?php

	include("adminpage.php");
	?>

	<form method="post" action="edit.php" >
		<div class="input-group form-group">
			<!-- newly added field-->
			<input class="form-control" type="hblog_idden" name="blog_id" value="<?php echo $blog_id; ?>">
			<label>Title</label>
			<!--<input type="text" name="name" value="">-->
			<!-- modified form fields-->
			<input  class="form-control" type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group form-group">
			<label>Author</label>
			<!--<input type="text" name="address" value="">-->
			<input  class="form-control" type="text" name="author" value="<?php echo $author; ?>">
		</div>

		<div class="input-group form-group">
			<label>Content</label>
			<!--<input type="text" name="address" value="">-->
			<input class="form-control" type="text" name="content" value="<?php echo $content; ?>">
		</div>
			<div class="input-group form-group">
			<label>Image</label>
			<!--<input type="text" name="address" value="">-->
			<input class="form-control" type="text" name="img" value="<?php echo $img; ?>">
		</div>
			<div class="input-group form-group">
			<label>Date</label>
			<!--<input type="text" name="address" value="">-->
			<input type="text" name="date" value="<?php echo $date; ?>">
		</div>
		

		<div class="input-group form-group">
			<!--old form button<button class="btn" type="submit" name="save" >Save</button>-->
			<!--new bbutton to show update during editing-->
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>

<?php endif ?>
		</div>
	</form>


	<?php if (isset($_SESSION['message'])): ?> 	
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<?php $results = mysqli_query($db, "SELECT * FROM blog_details"); ?>

<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
				<th>Content</th>
				<th>Image</th>
				<th>Date</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>

	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
			<td><?php echo $row['content']; ?></td>
				<td><?php echo $row['img']; ?></td>
			<td><?php echo $row['date']; ?></td>

			<td>
		
				<a href="editblog.php?edit=<?php echo $row['blog_id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="edit.php?del=<?php echo $row['blog_id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

</body>
</html>