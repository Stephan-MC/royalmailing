
    <?php include("config.php"); ?>

    <?php
    session_start();

    // Check if user is not logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect user to login page
        header('Location: login.php');
        exit();
    }

    // Establish a connection to the database
    $dbhost = 'localhost';     // replace with your database host name
    $dbuser = 'royalmailing_royal';          // replace with your database username
    $dbpass = 'Hitme@2020Admin';      // replace with your database password
    $dbname = 'royalmailing_royal';    // replace with your database name
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $shipment = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM shipment WHERE id=" . $_GET['edit']));
    ?>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
                <a class="navbar-brand" href="index.html"><img src="../img/all1.png" class="img-responsive" alt="logo" style="margin-top: 0px !important; width: 100px; height: 30px;"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                <li><a href='process_logout.html'><i class='fa fa-sign-out fa-fw'></i> Logout</a>            </ul>
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
                    <h1 class="page-header">Quickly Edit Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shipping Information
                        </div>
                        <div class="panel-body">

                            <!-- form start -->
                            <form action='/admin/pages/process-quickedit.php' method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $shipment['trackin_number'] ?>" name="trackin_number" />
                                    <input type="hidden" value="<?= $shipment['id'] ?>" name="id" />

                                <div class="form-group">
                                    <!-- <label style="font-weight: bold;">Product ID</label> -->
                                  
                                </div>

                                <div class="row" style="width: 50%; margin: auto;">
                                    <h3 style="text-align: center;">INFORMATION</h3>
                                    <label>Current Location</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" name="current_location" required id="current_location"  required value="<?= $shipment['current_location'] ?>">
                                    </div>
                                    <label>Current Date</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                        <input type="text" class="form-control" name="current_date" placeholder="Enter Current Date (For Example: May 06, 2023)" required value="<?= $shipment['currentt_date'] ?>">
                                    </div>
                                    <label>Current Time</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        <input type="text" class="form-control" name="current_time"  placeholder="Enter Current Time (For Example: 1:51 AM)" required value="<?= $shipment['currentt_time'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value="HOLD" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>HOLD</option>
                                            <option value="REGISTERED" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>REGISTERED</option>
                                            <option value="PROCESSING" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>PROCESSING</option>
                                            <option value="ACTIVE" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>ACTIVE</option>
                                            <option value="HOLD" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>HOLD</option>
                                            <option value="PENDING" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>PENDING</option>
                                            <option value="TRANSIT" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>TRANSIT</option>
                                            <option value="DELIVERED" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>DELIVERED</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Reason for Status</label>
                                        <textarea class="form-control" rows="3" name="status_reason" required value=""><?= $shipment['reason_status'] ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" name="edit_shipment" style="margin-top: 50px; margin-bottom: 50px;">Quick Update Shipment</button>
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row (nested) -->

                            </form>
                            <!-- form end -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqVHVTkSqenuTqAeXrQ6KtBLZtUYSB-FE&amp;libraries=places"></script>

    <script type="text/javascript">
        autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('current_location'));
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>



</html>
