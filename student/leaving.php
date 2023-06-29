<?php

session_start();

include('connect.php');

if (empty($_SESSION['uid'])) {
  # code...
  header('location:index.php');
}

if (isset($_POST['btn'])) {
  # code...
  $ldate=date('Y-m-d');
  $uid=$_SESSION['uid'];
  $uname=$_SESSION['uname'];
  $subject=$_POST['subject'];
  $description=$_POST['description'];


  mysqli_query($con,"INSERT INTO leaving(`ldate`,`uid`,`uname`,`subject`,`description`) VALUES ('$ladte','$uid','$uname','$subject','$description')");

   echo "<script>

    alert ('Leaving Upload Success');
    window.location.href='leaving.php';

  </script>";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>User Leaving Page</title>
  <?php
      include('bootcdn.php');
  ?>
</head>
<body>
  <?php
  include('header.php'); 
  ?> 



  <div class="container">

  		<!-- top section starts -->
  	<div class="well well-sm">
  		<span class="glyphicon glyphicon-edit"></span>
  		  LEAVING PAGE
  		
  	</div>
  	<!-- top section endss -->



    <div class="rows">
      
      <div class="col-sm-5">

        <form method="post" enctype="multipart/form-data">

          <div class="panel panel-default">

            <div class="panel-heading">

              <h3>Upload New Application</h3>
              
            </div>

            <div class="panel-body">

              <label>Subject</label>
              <input type="text" name="subject" class="form-control" required=""><br>

              <label>Discription</label>
              <textarea rows="5" name="description" class="form-control" required=""></textarea><br>

            </div>

            <div class="panel-footer">

              <button class="btn btn-primary btn block" name="btn" type="submit">Send Application</button>

            </div>
            
          </div>
          
        </form>
        
      </div>

      <div class="col-sm-7">

        <h4>Application List</h4>
        
      </div>

    </div>

  </div>

</body>
</html>