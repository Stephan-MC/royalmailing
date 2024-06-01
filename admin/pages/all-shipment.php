
<!DOCTYPE html>
<html lang="en">
  <?php 
  session_start();

  include("config.php"); 

  global $conn;

// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect user to login page
  header('Location: login.php');
  exit();
}
?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | USPS</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <!-- <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

.dropdown-menu {
  position: absolute;
  top: 100%;
  right: 0;
  z-index: 1000;
  min-width: 150px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 16px;
  text-align: right;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

@media (max-width: 767px) {
  .dropdown-menu {
    min-width: auto;
    text-align: center;
   
  z-index: 9999;

  }
  .dropdown-menu li {
    display: block;
    margin-bottom: 10px;
    z-index: 9999;
  }
  .dropdown-menu li:last-child {
    margin-bottom: 0;
    z-index: 9999;
  }

}

</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../img/all1.png" class="img-responsive" alt="logo" style="margin-top: 0px !important; width: 100px; height: 30px;"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!--<script>window.location='login.php'</script>-->
                <li><a href='process_logout.php'><i class='fa fa-sign-out fa-fw'></i> Logout</a>            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Shipment<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="all-shipment.php">All Shipment</a>
                                </li>
                                <li>
                                    <a href="add-shipment.php">Add Shipment</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="invoicereceipt.php"><i class="fa fa-money fa-fw"></i> Invoice Receipt</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">

                
                <div class="col-lg-12">
                    <h1 class="page-header">All Shipment</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  <h5 style="text-align: center;">The table below shows the shipment details starting with the latest shipment added.</h5>
                  <div class="card mb-3">
                    <div class="card-header">
                      <i class="fa fa-table"></i> Shipping Table</div>
                    <div class="card-body">
                        <div class="table-responsive" style="overflow: auto">
                        <?php
// Connect to MySQL database


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute a query to retrieve shipment data
$sql = "SELECT * FROM shipment";
$result = mysqli_query($conn, $sql);

// Loop through the results and output table rows
if (mysqli_num_rows($result) > 0) {
 
   echo' <table class="table table-bordered overflow-auto" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">';
   echo'<thead>';
   echo '<tr>';
   echo  '<th style="text-align: center;">Receiver Name</th>';
   echo '<th style="text-align: center;">Tracking Number</th>';
   echo '<th style="text-align: center;">Shipment Title</th>';
   echo '<th style="text-align: center;">Method Of Shipment</th>';
   echo '<th style="text-align: center;">Product Name</th>';
   echo '<th style="text-align: center;">Departure Location</th>';
   echo '<th style="text-align: center;">Pick Up/Delivery Location</th>';
   echo '<th style="text-align: center;">Current Location</th>';
   echo '<th style="text-align: center;">Status</th>';
   echo '<th style="text-align: center;">Action</th>';
   echo '</tr>';
   echo '</thead><tbody>';
   while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["receiver_name"] . "</td>";
    echo "<td>" . $row["trackin_number"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["method"] . "</td>";
    echo "<td>" . $row["product_name"] . "</td>";
    echo "<td>" . $row["departure_location"] . "</td>";
    echo "<td>" . $row["pickup_location"] . "</td>";
    echo "<td>" . $row["current_location"] . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "<td>";
    echo "<ul class='icons-list' style='list-style: none; text-align: center;'>";
    echo "  <li class='dropdown' style='text-align: center;'>";
    echo "    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
    echo "      <i class='fa fa-bars icon-nav'></i><i class='fa fa-angle-down'></i>";
    echo "    </a>";
    echo "    <ul class='dropdown-menu dropdown-menu-right dropdown' > ";
    echo "      <li>";
    echo "        <a href='edit-shipment.php?edit=" . $row['id'] . "'>";
    echo "          <i class='fa fa-pencil'></i> Edit Shipment";
    echo "        </a>";
    echo "      </li>";
    echo "      <li>";
    echo "        <a href='#' onclick='delete_user(" . $row['id'] . ")'>";
    echo "          <i class='fa fa-trash'></i> Delete Shipment";
    echo "        </a>";
    echo "      </li>";
    echo "      <li>";
    echo "        <a href='quick-edit.php?edit=" . $row['id'] . "'>";
    echo "          <i class='fa fa-pencil'></i> Quick Edit Shipment";
    echo "        </a>";
    echo "      </li>";
    echo "    </ul>";
    echo "  </li>";
    echo "</ul>";
    echo "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
   echo' </table>';
} else {
  echo "0 results";
}

// Close database connection
mysqli_close($conn);
?>   
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script type='text/javascript'>
        function delete_user(id){
             
            var answer = confirm('Are you sure to delete?');
            if (answer){
                // if user clicked ok, 
                // pass the id to delete.php and execute the delete query
                window.location = 'process-delete.php?id=' + id;
            } 
        }
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>



</html>
