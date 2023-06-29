

<?php


session_start();

include('../connect.php');

if(empty($_SESSION['admin']))
{
   header('location:index.php');
}


if(isset($_POST['add']))
{
	$ndate = date('Y-m-d');
	$msg = $_POST['msg'];
	

	mysqli_query($con,"INSERT INTO notification (`ndate`,`msg`)VALUES('$ndate','$msg')");

   

	echo "<script>
	alert('Broadcast new notification');
	window.location.href='add.php';
	</script>";



}


?>



<!DOCTYPE html>
<html>
<head>
	<title> Add New Notification Page</title> 
	<?php include('../bootcdn.php') ?>
</head>
<body> 

	<?php include('header.php') ?> 


	<div class="container"> 

      <!-- top section start -->
		<div class="well well-sm">
			<span class="glyphicon glyphicon-bullhorn"></span> 
			ADD NEW  NOTIFICATION PAGE
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
					

					<label>Add New Notification</label>
					<textarea rows="4" name="msg"class="form-control"autofocus required></textarea>
					<br>

					
				</div>

				<div class="panel panel-footer">
					<button type="submit" name="add" class="btn btn-primary btn-block">Send Notification</button>
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