

<?php 

include('connect.php');

if(isset($_POST['reg']))
{
	$rdate = date('Y-m-d');
	$sname = $_POST['sname'];
	$contact = $_POST['contact'];
	$branch = $_POST['branch'];
	$address = $_POST['address'];
	$photo = $_FILES['photo']['name'];
	$pass =$_POST['pass'];

	mysqli_query($con,"INSERT INTO students (`rdate`,`sname`,`contact`,`branch`,`address`,`photo`,`pass`) VALUES ('$rdate','$sname','$contact','$branch','$address','$photo','$pass') ");

           $dir = "images/";
           $photo = $_FILES['photo']['name'];          
           $tmp_photo = $_FILES['photo']['tmp_name'];
           move_uploaded_file($tmp_photo,$dir.$photo);



	echo "<script>
	alert('Registration complited');
	window.location.href='index.php';          /*for return on index page*/
	</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Sign up</title>
	<?php echo include('bootcdn.php') ?>
</head>
<body>


<div class="container">
	

	<br><br><br>
    <div class="row">
    	

    	<div class="col-sm-3">
    		

           


    	</div>
    	<div class="col-sm-6">
    		

    		<!-- sign up form start -->


            <form method="post" enctype="multipart/form-data">
            	

            	<div class="panel panel-default">
            		
            	   <div class=" panel-heading">
            		<h3>Student Registration Form</h3>
            	   </div>

            	   <div class=" panel-body">
            		

            		<label>Student Name</label>
            		<input type="text" name="sname"class="form-control"autofocus required>
            		<br>
            		<label>Contact Number</label>
            		<input type="number" name="contact"class="form-control"autofocus required>
            		<br>
            		<label>Branch</label>
            		<select name="branch" class="form-control"autofocus required>
            			<option value="">Select Branch</option>
            			<option>CS</option>
            			<option>Robotics</option>
            			<option>dynamics</option>
            			<option>Chemical</option>
            			<option>Mechanical</option>
            			<option>Engineering</option>
            		</select>
            		<br>
            		<label>Address</label>
            		<textarea name="address"class="form-control"autofocus required></textarea>
            		<br>
            		<label>Upload Photo</label>
            		<input type="file" name="photo"class="form-control"autofocus required>
            		<br>
            		<label>Set Password</label>
            		<input type="text" name="pass"class="form-control"autofocus required>
            		<br>


            	   </div>

            	   <div class="panel-footer">
            		

            		<button type="submit"name="reg"class="btn btn-primary btn-block">Sign Up</button>
            		<button type="reset"class="btn btn-info btn-block">Reset</button>
            		<br>
            		<p>Go to <a href="index.php">Login Page</a>  </p>


            	   </div>

                </div>

            </form>


    		<!-- sign up form end -->


    	</div>


    </div>

</div>


</body>
</html>