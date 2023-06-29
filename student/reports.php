<?php

session_start();

include('connect.php');

if (empty($_SESSION['uid'])) {
  # code...
  header('location:index.php');
}

error_reporting(0);

$id=$_GET['id'];
mysqli_query($con,"DELETE FROM upload WHERE id='".$id."'");


?>
<!DOCTYPE html>
<html>
<head>
  <title>User Reports Page</title>
  <?php
      include('bootcdn.php');
  ?>


  <style type="text/css">
    .table-bordered thead tr th{
      background-color: #C0C0C0;
    }
  </style>
</head>
<body>
  <?php
  include('header.php'); 
  ?> 



  <div class="container">

  		<!-- top section starts -->
  	<div class="well well-sm">
  		<span class="glyphicon glyphicon-search"></span>
  		REPORTS
  		
  	</div>
  	<!-- top section endss -->

    <!-- searh setion starts -->

    <div class="row">

      <div class="col-sm-3">

      <form method="post">

        <label>Search By Date</label>
        <input  type="date" name="pdata" class="form-control" required=""><br>
        
      
        
      </div>

      <div class="col-sm-1">
        <br>

        <button type="submit" name="search1" class="btn btn-primary">Search</button>
        
        </form>
      </div>

      <div class="col-sm-3">

        <form method="post">

        <label>From Date</label>
        <input type="date" name="fdate" class="form-control" required="">
        
      </div>

       <div class="col-sm-3">

        <label>To Date</label>
        <input type="date" name="tdate" class="form-control" required="">
        
      </div>

      <div class="col-sm-2">
        <br>
        <button type="submit" name="search2" class="btn btn-primary">Search</button>

      </form>
      </div>
      
    </div>

    <!-- searh setion starts -->

    <hr>

    <!-- search data list start 1 -->
    <h4>Search By Date</h4>
     <div class="table-responsive">

        <table class="table table-bordered table-hover table-striped">

          <thead>
            <tr>
              <th>Upload  Id</th>
              <th>Upload Date</th>
              <th>User Id</th>
              <th>Name</th>
              <th>Title</th>
              <th>Decription</th>
              <th>File/Document</th>
              <th>Action</th>
            </tr>
          </thead>

           <tbody id="myTable">
            <?php

            if(isset($_POST['search1']))
            {

              $pdata=$_POST['pdata'];

            $sql=mysqli_query($con,"SELECT * FROM upload WHERE uid='".$_SESSION['uid']."' AND udate='".$pdata."' ");
            while ($result=mysqli_fetch_assoc($sql)) {    
            ?>
            <tr>
              <td>
                <?php echo $result['id']?>
              </td>
              <td>
                <?php echo $result['udate']?>
              </td>
              <td>
                <?php echo $result['uid']?>
              </td>
              <td>
                <?php echo $result['uname']?>
              </td>
              <td>
                <?php echo $result['title']?>
              </td>
              <td>
                <?php echo $result['description']?>
              </td>

              <td>

                <a href="<?php echo 'images/'.$result['docs']?>" target="blank">
                <?php echo $result['docs']?>
                </a>

              </td>

              <td>
                <a onclick="return confirm('Are You Sure?')" href="reports.php?id=<?php echo $result['id']  ?>">
                 <span class="glyphicon glyphicon-trash"></span>
                 Delete 
                </a>
                
              </td>
            </tr>

            <?php
            }}
            ?>
          </tbody>


          
        </table>
        
      </div>
    <!-- search data list end 1 -->


    <hr>


    <!-- search data list start 2 -->
    <h4>Search By from-to Date</h4>
     <div class="table-responsive">

        <table class="table table-bordered table-hover table-striped">

          <thead>
            <tr>
              <th>Upload  Id</th>
              <th>Upload Date</th>
              <th>User Id</th>
              <th>Name</th>
              <th>Title</th>
              <th>Decription</th>
              <th>File/Document</th>
              <th>Action</th>
            </tr>
          </thead>

           <tbody id="myTable">
            <?php

            if(isset($_POST['search2']))
            {

              $fdate=$_POST['fdate'];
              $tdate=$_POST['tdate'];

            $sql=mysqli_query($con,"SELECT * FROM upload WHERE uid='".$_SESSION['uid']."' AND (udate BETWEEN '".$fdate."' AND '".$tdate."') ");
            while ($result=mysqli_fetch_assoc($sql)) {    
            ?>
            <tr>
              <td>
                <?php echo $result['id']?>
              </td>
              <td>
                <?php echo $result['udate']?>
              </td>
              <td>
                <?php echo $result['uid']?>
              </td>
              <td>
                <?php echo $result['uname']?>
              </td>
              <td>
                <?php echo $result['title']?>
              </td>
              <td>
                <?php echo $result['description']?>
              </td>

              <td>

                <a href="<?php echo 'images/'.$result['docs']?>" target="blank">
                <?php echo $result['docs']?>
                </a>

              </td>

              <td>
                <a onclick="return confirm('Are You Sure?')" href="reports.php?id=<?php echo $result['id']  ?>">
                 <span class="glyphicon glyphicon-trash"></span>
                 Delete 
                </a>
                
              </td>
            </tr>

            <?php
            }}
            ?>
          </tbody>


          
        </table>
        
      </div>
    <!-- search data list end 2 -->

  </div>

</body>
</html>