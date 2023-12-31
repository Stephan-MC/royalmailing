    <!-- include header -->
     
<!-- include database connection -->

<?php include("config.php"); ?>

<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect user to login page
  header('Location: login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">



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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    
                                    <div class="huge">2</div>
                                    <div>Contacts!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sitemap fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    
                                    <div class="huge">56</div>
                                    <div>Shipments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="all-shipment.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    Contact Table
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" style="text-align: center;">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Name</th>
                                                    <th style="text-align: center;">Email</th>
                                                    <!-- <th style="text-align: center;">Organization</th> -->
                                                    <!-- <th style="text-align: center;">Country</th> -->
                                                    <th style="text-align: center;">Subject</th>
                                                    <th style="text-align: center;">Phone number</th>
                                                    <th style="text-align: center;">Message</th>
                                                    <th style="text-align: center;">Date/Time</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                
                                                <tr>
                                                    <td style="text-transform: capitalize;">baptiste manent</td>
                                                    <td>baptiste.manent@gmail.com</td>
                                                    <!-- <td></td> -->
                                                    <!-- <td></td> -->
                                                    <td>Delivery of my package</td>
                                                    <td>0648983534</td>
                                                    <td>Good afternoon everyone, could you please call me back on +33 6 48 98 35 34 please?

I have a question about the delivery of my package :)

Best regards</td>
                                                    <td>2023-03-13 09:49:26</td>
                                                    <td style="text-align: center;"><a href='#' onclick='delete_user(1)'><button class="btn btn-danger">Delete</button></a>
                                                </tr>

                                                
                                                <tr>
                                                    <td style="text-transform: capitalize;">Lukas Zibaitis</td>
                                                    <td>lzibaitis@gmail.com</td>
                                                    <!-- <td></td> -->
                                                    <!-- <td></td> -->
                                                    <td>Insurance Fee Payment</td>
                                                    <td>781-491-7681</td>
                                                    <td>To whomever it may concern:

Tracking number: 9515 0341 9038

I have a package on hold at Bradley International Airport, Connecticut, USA. The hold is in light of insurance fees that are required to be paid.

If the instructions for how these could be paid for could be sent/emailed to me I will gladly pay for it. Thank you</td>
                                                    <td>2023-03-30 20:19:24</td>
                                                    <td style="text-align: center;"><a href='#' onclick='delete_user(2)'><button class="btn btn-danger">Delete</button></a>
                                                </tr>

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row -->
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

    <script type='text/javascript'>
      function delete_user(id){
           
          var answer = confirm('Are you sure to delete?');
          if (answer){
              // if user clicked ok, 
              // pass the id to delete.php and execute the delete query
              window.location = 'process-contact5445.php?id=' + id;
          } 
      }
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>



</html>
