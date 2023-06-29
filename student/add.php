

<?php


session_start();

include('connect.php');
if(empty($_SESSION['uid']))
{
   header('location:index.php');
}


if(isset($_POST['btn']))
{
	$udate = date('y-m-d');
	$uid = $_SESSION['uid'];
	$uname = $_SESSION['uname'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$docs = $_FILES['docs']['name'];

	mysqli_query($con,"INSERT INTO upload (`udate`,`uid`,`uname`,`title`,`description`,`docs`)VALUES('$udate','$uid','$uname','$title','$description','$docs')");

    $dir = "images/"; 
	$docs = $_FILES['docs']['name'];
	$tmp_docs = $_FILES['docs']['tmp_name'];
	move_uploaded_file($tmp_docs,$dir.$docs);

	echo "<script>
	alert('Upload success');
	window.location.href='add.php';
	</script>";



}


?>



<!DOCTYPE html>
<html>
<head>
	<title>User Add New Page</title> 
	<?php include('bootcdn.php') ?>
</head>
<body> 

	<?php include('header.php') ?> 


	<div class="container"> 

      <!-- top section start -->
		<div class="well well-sm">
			<span class="glyphicon glyphicon-plus"></span> 
			Add NEW PAGE
		</div> 

		<!-- top section end -->


<!-- form section start -->


<div class="row">
	

	<div class="col-sm-6">
		<form method="post" enctype="multipart/form-data">
			

			<div class="panel panel-default">
				

				<div class="panel panel-heading">
					<h4>Upload New Info</h4>
				</div>

				<div class="panel panel-body">
					

					<label>Enter Title</label>
					<input type="text" name="title" class="form-control"autofocus required>
					<br>

					<label>Description</label>
					<textarea rows="4" name="description"class="form-control"autofocus required></textarea>
					<br>

					<label>Upload File/Document</label>
					<input type="file" name="docs"class="form-control"autofocus required>


				</div>

				<div class="panel panel-footer">
					<button type="submit" name="btn" class="btn btn-primary btn-block">Upload</button>
				</div>


			</div>


		</form>
	</div>


</div>


<!-- form section end -->


		
	</div>


</head>
<body>

</body>
</html>