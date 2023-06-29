 <style type="text/css">
    .navbar-inverse{
      background-color:steelblue;
      border:none;
      border-radius: 0;
    }
    #myNavbar ul li a{ color: white;

    }
    .navbar-brand{
      font-family: cursive;

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
      <a class="navbar-brand" href="#">Welcome <?php echo $_SESSION['admin'] ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">
        	<span class="glyphicon glyphicon-home"></span>
        Home</a></li>
        <li><a href="add.php">
        	<span class="glyphicon glyphicon-plus"></span>
        Add Notification</a></li>
        <li><a href="upload.php">
        	<span class="glyphicon glyphicon-list"></span>
        Upload List</a></li>
        <li><a href="reports.php">
        	<span class="glyphicon glyphicon-search"></span>
        Reports</a></li>
         <li><a href="leaving.php">
          <span class="glyphicon glyphicon-edit"></span>
        Leaving List</a></li>
        <li><a href="users.php">
          <span class="glyphicon glyphicon-edit"></span>
        Users List</a></li>
         <li><a href="logout.php">
          <span class="glyphicon glyphicon-log-out"></span>
        Log Out</a></li>
      </ul>

      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
    </div>
  </div>
</nav>

