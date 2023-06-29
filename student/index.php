

<?php



session_start();


include('connect.php');


if(!empty($_SESSION['uid']))
{
   header('location:home.php');
}



if(isset($_POST['login']))
{
   $user = $_POST['user'];
   $pass = $_POST['pass'];

   $sdata = mysqli_query($con,"SELECT * FROM students WHERE `contact`= '".$user."' AND `pass`= '".$pass."' ");
   $result = mysqli_num_rows($sdata);




while($abc = mysqli_fetch_assoc($sdata))
{
   $_SESSION['uid'] = $abc['id'];
   $_SESSION['uname'] = $abc['sname'];
}




   if($result>0)
   {
             //  echo "<script>
   //alert('Login Successfully');
   
   //</script>";
      header('location:home.php');   /*after login go to home page*/
   }
   else
   {
      echo "<script>
   alert(`Invalid Entrey 
   Please check username and password`);
   window.location.href='index.php';
   
   </script>";
   }

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student login page</title>


<?php echo include('bootcdn.php'); ?>


</head>
<body style="background-color: #79c2d0;">


<div class="container">
	

	<br><br><br><br><br>


	<div class="row">


       <div class="col-sm-4">
	
       </div>

       <div class="col-sm-4">
	      

	      <!-- login form start -->
         <form method="post">


               <div class="panel panel-default">
                         

                         <div class="panel-heading">
                         	

                         	<h3>Student login page</h3>


                         </div>

                         <div class="panel-body">
                         	

                         	 <label>Username</label>
                            <input type="text" name="user"class="form-control"autofocus required>
                            <br>
                            <label>Password</label>
                            <input type="text" name="pass"class="form-control"autofocus required>

                         </div>

                         <div class="panel-footer">
                         	

                         	<button type="submit"name="login"class="btn btn-primary btn-block">Login</button><br>


                           <p>
                              Not registered click <a href="signup.php">Sign up</a>

                           </p>
                           <p>
                              Go to <a href="../admin/index.php">Admin panel</a>

                           </p>




                         </div>


               </div>

         </form>
	      <!-- login form end -->


       </div>

		
	</div>


</div>


</body>
</html>