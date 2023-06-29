<?php

session_start();
include('../connect.php');

if (empty($_SESSION['admin'])) {
  # code...
  header('location:index.php');
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>User Home Page</title>
  <?php
      include('../bootcdn.php');
  ?>

  <style type="text/css">
  	


  </style>
</head>
<body>
  <?php
  include('header.php'); 
  ?> 



  <div class="container">

  		<!-- top section starts -->
  	<div class="well well-sm">
  		<span  class="glyphicon glyphicon-home"></span>
  		HOME PAGE
  		
  	</div>
  	<!-- top section endss -->

  	<!-- content section starts -->

  		

  		<div class="rows">
  			
  			<div class="col-sm-3">

  				<div class="well">

  					<center>
  						<span style="font-size: 30px; color: steelblue;" class="glyphicon glyphicon-upload"></span>

              <?php
              $sql=mysqli_query($con,"SELECT * FROM upload ");

              $result=mysqli_num_rows($sql);
              ?>

  						<h4>Total Uploads -<?php echo $result;  ?> </h4>
  					</center>
  					
  				</div>
  				
  			</div>


  			<div class="col-sm-3">

  				<div class="well">

  					<center>
  						<span style="font-size: 30px; color: steelblue;" class="glyphicon glyphicon-time"></span>

              <?php
              $sql=mysqli_query($con,"SELECT * FROM upload WHERE udate='".date('Y-m-d')."'  ");

              $result=mysqli_num_rows($sql);
              ?>


  						<h4>Todays Uploads -<?php echo $result;  ?></h4>
  					</center>
  					
  				</div>
  				
  			</div>

  			<div class="col-sm-3">

  				<div class="well">

  					<center>
  						<span style="font-size: 30px; color: steelblue;" class="glyphicon glyphicon-edit"></span>

               <?php
              $sql=mysqli_query($con,"SELECT * FROM leaving  ");

              $result=mysqli_num_rows($sql);
              ?>

  						<h4>Applications -<?php echo $result; ?> </h4>
  					</center>
  					
  				</div>
  				
  			</div>

        <div class="col-sm-3">


          <div class="well">

          

            <center>
              <span style="font-size: 30px; color: steelblue;" class="glyphicon glyphicon-edit"></span>

            <?php
              $sql=mysqli_query($con,"SELECT * FROM leaving WHERE ldate='".date('Y-m-d')."'  ");

              $result=mysqli_num_rows($sql);
              ?>

              <h4> Today's Applications -<?php echo $result; ?> </h4>
            </center>
            
          
            
          </div>

          
          
        </div>

  		</div>

  	<!-- content section starts -->


  </div>

</body>
</html>