 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>header</title>
</head>
<body>








 <style type="text/css">
      .navbar-inverse 
      {
       background-color: steelblue;
       border:none; 
       border-radius:0;
      } 

      #myNavbar ul li a 
      {
        color: white;
      } 

      .col-sm-3 h4 
      {
        font-weight: bold;
      } 

      .col-sm-6 p 
      {
        text-indent: 50px;
        color: grey; 
        line-height: 25px;
      }

      .abc 
      {
        background-color: black;
        color: white;
      } 

  </style>
 






 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color: white;" class="navbar-brand" href="#"> 
      	<span class="glyphicon glyphicon-grain"></span>
       Welcome <?php echo $_SESSION['uname']; ?>
      </a>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right"> 
      	<!-- span tag into that class tag with glyphicon for tags picture --> 
      	<!-- link list tag mein class- active for colors -->
       
        <li ><a href="home.php">
        <span class=" glyphicon glyphicon-home"></span> 
        Home</a></li>
        
        <li><a href="add.php"> 
        <span class="glyphicon glyphicon-plus"></span>
        Add New</a></li>
        
        <li><a href="upload.php"> 
        <span class="glyphicon glyphicon-list"></span>
        Upload List</a></li>
        
        <li><a href="reports.php"> 
        <span class="glyphicon glyphicon-search"></span> 
        Reports</a></li>  

        <li><a href="leaving.php"> 
          <span class="glyphicon glyphicon-edit"></span>
        Leaving Form</a></li> 

        <li><a href="logout.php">
          <span class="glyphicon glyphicon-off"></span> 
        Logout</a></li>
      </ul> 
      <!-- reports meaning search  -->
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->  
      <!-- not in  used -->
    </div>
  </div>
</nav> 









</body>
</html>