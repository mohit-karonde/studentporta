<?php

session_start();

include('../connect.php');

if (!empty($_SESSION['admin'])) {
  # code...
  header('location:home.php');
}

if (isset($_POST['login'])) {
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  

  

  if ($user=='Admin' && $pass=='admin123') {

    $_SESSION['admin']=$user;

    header('location:home.php');
  }
  else
  {
    echo "<script>

    alert('Login Failed');
    window.location.href='index.php';

    </script>";
  }
}



?>



<!DOCTYPE html>
<html>
<head>
  <title>
    Students login page
  </title>
<?php

 include('../bootcdn.php');


?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Admin login page
	</title>
<?php

echo include('../bootcdn.php');


?>


</head>
<body style="background-color: #79c2d0;">
<div class="container">
	<br><br><br><br><br><br>

<div class="row">
	
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<!-- login form start  -->
     <div class="panel panel-default">
     	
   <div class="panel-heading">
   	<h3>Admin Login Page</h3>
   </div>
   <form method="post">
    <div class="panel-body">
    	<label>Username</label>
    	<input type="text" name="user" class="form-control"autofocus required>

    	<label>Password</label>
    	<input type="password" name="pass" class="form-control"autofocus required>
    </div>
  <div class="panel-footer">
  	<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>

  </form>



    <br>


    
    <p>Go To
      <a href="../student/index.php">Student Panel</a>
    </p>

  </div>



     </div>
       
	<!-- login end -->
</div>

</div>








</div>
</body>
</html>