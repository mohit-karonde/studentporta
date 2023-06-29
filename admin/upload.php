<?php

session_start();

include('../connect.php');

if (empty($_SESSION['admin'])) {
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
  <title>User Upload Page</title>
  <?php

      include('../bootcdn.php');

  ?>

  <style type="text/css">

    .table-bordered thead tr th
    {
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
  		<span class="glyphicon glyphicon-list"></span>
  		UPLOAD PAGE
  		
  	</div>
  	<!-- top section endss -->

    <!-- upload list starts -->

      <div class="row">

        <div class="col-sm-3">

          <input type="text" class="form-control" id="myInput" placeholder="Filter here..." autofocus="">

                          <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
          
        </div>

        <div class="col-sm-7">
          
        </div>

        <div class="col-sm-2">

          <a href="" class="btn btn-success" title="Print Data Sheet">
            <span class="glyphicon glyphicon-print"></span>
            Print
          </a>
          
        </div>

      </div>
      <br>

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

            $sql=mysqli_query($con,"SELECT * FROM upload ORDER BY id desc ");
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
                <a onclick="return confirm('Are You Sure?')" href="upload.php?id=<?php echo $result['id']  ?>">
                 <span class="glyphicon glyphicon-trash"></span>
                 Delete 
                </a>
                
              </td>
            </tr>

            <?php
            }
            ?>
          </tbody>


          
        </table>
        
      </div>

    <!-- upload list starts -->


  </div>

</body>
</html>