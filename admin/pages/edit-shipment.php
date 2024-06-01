    <!-- include header -->
     
<!-- include database connection -->

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

    // Establish a connection to the database
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $shipment = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM shipment WHERE id=" .$_GET['edit']));

  

    $countries = array(
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", 
        "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", 
        "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", 
        "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", 
        "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic of the", 
        "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", 
        "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", 
        "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (formerly Swaziland)", "Ethiopia", "Fiji", 
        "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", 
        "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", 
        "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", 
        "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", 
        "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", 
        "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", 
        "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", 
        "Myanmar (formerly Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", 
        "Niger", "Nigeria", "North Korea", "North Macedonia (formerly Macedonia)", "Norway", "Oman", "Pakistan", 
        "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", 
        "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", 
        "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia",
        "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", 
        "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", 
        "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste (formerly East Timor)", 
        "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", 
        "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", 
        "Vatican City (Holy See)", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");

    

?>

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
                
               <!-- <script>window.location='login.php'</script> -->
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
                    <h1 class="page-header">Update Information</h1>
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
                            <form action='process-edit.php' method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $shipment['trackin_number'] ?>" name="trackin_number" />
                                <input type="hidden" value="<?= $shipment['id'] ?>" name="id" />

                                <div class="row">    
                                    <div class="col-lg-6">
                                        <h3 style="text-align: center;">SHIPMENT INFORMATION</h3>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="shipment_title" placeholder="Enter Shipment Title" required value="<?=  $shipment['title'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Method of Shipment</label>
                                            <select class="form-control" name="shipment_method" required>
                                                <option disabled="">Select Method Shipment</option>
                                                <option value="LAND" <?= $shipment['method'] == 'LAND' ? 'selected' : '' ?>>LAND</option>
                                                <option value="AIR" <?= $shipment['method'] == 'AIR' ? 'selected' : '' ?>>AIR</option>
                                                <option value="WATER" <?= $shipment['method'] == 'WATER' ? 'selected' : '' ?>>WATER</option>
                                                <option value="TRANSIT" <?= $shipment['method'] == 'TRANSIT' ? 'selected' : '' ?>>TRANSIT</option>
                                                <option value="WALKING" <?= $shipment['method'] == 'WALKING' ? 'selected' : '' ?>>WALKING</option>
                                                <option value="DRIVING" <?= $shipment['method'] == 'DRIVING' ? 'selected' : '' ?>>DRIVING</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <!-- <input class="form-control" name="shipment_category" placeholder="Enter Shipment Category"> -->
                                            <select class="form-control" name="shipment_category" required>
                                                <option disabled="">Select Shipment Category</option>
                                                <option value="Household" <?= $shipment['category'] == 'Household' ? 'selected' : '' ?>>Household</option>
                                                <option value="Moving" <?= $shipment['category'] == 'Moving' ? 'selected' : '' ?>>Moving</option>
                                                <option value="Vehicles" <?= $shipment['category'] == 'Vehicles' ? 'selected' : '' ?>>Vehicles</option>
                                                <option value="Motor Cycles" <?= $shipment['category'] == 'Motor Cycles' ? 'selected' : '' ?>>Motor Cycles</option>
                                                <option value="Boats"  <?= $shipment['category'] == 'Boats' ? 'selected' : '' ?>>Boats</option>
                                                <option value="Heavy Equipment" <?= $shipment['category'] == 'Heavy Equiment' ? 'selected' : '' ?>>Heavy Equipment</option>
                                                <option value="Pharmaceuticals" <?= $shipment['category'] == 'Pharmaceuticals' ? 'selected' : '' ?>>Pharmaceuticals</option>
                                                <option value="FTL Freight"<?= $shipment['category'] == 'FTL Freight' ? 'selected' : '' ?>>FTL Freight</option>
                                                <option value="Business &amp; Industrial Goods"<?= $shipment['category'] == 'Business' ? 'selected' : '' ?>>Business &amp; Industrial Goods</option>
                                                <option value="Pets"<?= $shipment['category'] == 'Pets' ? 'selected' : '' ?>>Pets</option>
                                                <option value="Horses &amp; Livestock"<?= $shipment['category'] == 'Horses &amp; Livestock' ? 'selected' : '' ?>>Horses &amp; Livestock</option>
                                                <option value="Special Care"<?= $shipment['category'] == 'Special Care' ? 'selected' : '' ?>>Special Care</option>
                                                <option value="Food and Agricultural"<?= $shipment['category'] == 'Food and Agriculture' ? 'selected' : '' ?>>Food and Agricultural</option>
                                                <option value="Others"<?= $shipment['category'] == 'others' ? 'selected' : '' ?>>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" name="product_name" placeholder="Enter Product Name" required value="<?=  $shipment['product_name'] ?>">
                                        </div>
                                        <label>Weight</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="shipment_weight" placeholder="Enter Shipment Weight" required value="<?=  $shipment['product_weight'] ?>">
                                            <span class="input-group-addon">
                                                <select name="weight_unit" required>
                                                    <!-- <option selected="" disabled="">Select Weight Unit</option> -->
                                                    <option value="KILOGRAMS (KG)">KILOGRAMS (KG)</option>
                                                    <option value="GRAMS">GRAMS</option>
                                                    <option value="POUNDS">POUNDS</option>
                                                    <option value="OUNCES (OZ)">OUNCES (OZ)</option>
                                                    <option value="MILLIGRAMS (MG)">MILLIGRAMS (MG)</option>
                                                    <option value="LITRES">LITRES</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Total Shipment</label>
                                            <input class="form-control" name="shipment_total" placeholder="Enter Total Shipment" required value="<?=  $shipment['total_shipment'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="shipment_description" placeholder="Enter Shipment Description" required><?=  $shipment['description'] ?>
                                        </textarea>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        <h3 style="text-align: center;">LOCATION INFORMATION</h3>
                                        <label>Departure Location</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" class="form-control" name="departure_location" id="departure_location" placeholder="Enter Departure Location" required value="<?=  $shipment['departure_location'] ?>">
                                        </div>
                                        <label>Departure Date</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                            <input type="text" class="form-control" name="departure_date" id="departure_date" placeholder="Enter Departure Date (For Example: April 28, 2023)" required value="<?=  $shipment['departure_date'] ?>">
                                        </div>
                                        <label>Departure Time</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" class="form-control" name="departure_time" id="departure_time" placeholder="Enter Departure Time (For Example: 11:43 AM)" required value="<?=  $shipment['departure_time'] ?>">
                                        </div>
                                        <label>Pick Up/Delivery Location</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" class="form-control" name="pickup_location" id="pickup_location" placeholder="Enter Pick Up Location" required value="<?=  $shipment['pickup_location'] ?>">
                                        </div>
                                        <label>Pick Up/Delivery Date</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                            <input type="text" class="form-control" name="pickup_date" placeholder="Enter Pick Up Date (For Example: April 28, 2023)" required value="<?=  $shipment['pickup_date'] ?>">
                                        </div>
                                        
                                        <label>Pick Up/Delivery Time</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" class="form-control" name="pickup_time" placeholder="Enter Pick Up Time (For Example: 11:43 AM)" required value="<?=  $shipment['pickup_time'] ?>">
                                        </div>
                                        <label>Current Location</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" class="form-control" name="current_location" id="current_location" placeholder="Enter Current Location" required value="<?=  $shipment['current_location'] ?>">
                                        </div>
                                        <label>Current Date</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                            <input type="text" class="form-control" name="current_date" placeholder="Enter Current Date (For Example: April 28, 2023)" required value="<?=  $shipment['currentt_date'] ?>">
                                        </div>
                                        <label>Current Time</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" class="form-control" name="current_time" placeholder="Enter Current Time (For Example: 11:43 AM)" required value="<?=  $shipment['currentt_time'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option disabled="">Select Status</option>
                                                <option value="REGISTERED" <?= $shipment['status'] == 'REGISTERED' ? 'selected' : '' ?>>REGISTERED</option>
                                                <option value="PROCESSING" <?= $shipment['status'] == 'PROCESSING' ? 'selected' : '' ?>>PROCESSING</option>
                                                <option value="ACTIVE"  <?= $shipment['status'] == 'ACTIVE' ? 'selected' : '' ?>>ACTIVE</option>
                                                <option value="HOLD"  <?= $shipment['status'] == 'HOLD' ? 'selected' : '' ?>>HOLD</option>
                                                <option value="PENDING"  <?= $shipment['status'] == 'PENDING' ? 'selected' : '' ?>>PENDING</option>
                                                <option value="TRANSIT"  <?= $shipment['status'] == 'TRANSIT' ? 'selected' : '' ?>>TRANSIT</option>
                                                <option value="DELIVERED"  <?= $shipment['status'] == 'DELIVERED' ? 'selected' : '' ?>>DELIVERED</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Reason for Status</label>
                                            <textarea class="form-control" rows="3" name="status_reason" placeholder="Enter Reason for Status" required><?=  $shipment['reason_status'] ?></textarea>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 style="text-align: center;">RECEIVER INFORMATION</h3>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="receiver_name" placeholder="Enter Receiver Name" required value="<?=  $shipment['receiver_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="receiver_email" placeholder="Enter Receiver Email" required value="<?=  $shipment['receiver_email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" name="receiver_phone" placeholder="Enter Receiver Phone Number" required value="<?=  $shipment['receiver_contact'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>House Number</label>
                                            <input class="form-control" name="receiver_house" placeholder="Enter Receiver House Number" required value="<?=  $shipment['receiver_hphone'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Street Address</label>
                                            <input class="form-control" name="receiver_street" placeholder="Enter Receiver Street address" required value="<?=  $shipment['sender_street'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>City/State</label>
                                            <input class="form-control" name="receiver_city" placeholder="Enter Receiver City/State" required value="<?=  $shipment['receiver_city'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <!-- <input class="form-control" name="receiver_country" placeholder="Enter Receiver Country"> -->
                                            <select class="form-control" name="receiver_country" required>
                                                <option disabled="">Select Receiver Country</option>
                                                <?php foreach($countries as $country): ?>
                                                	<option value="<?= $country ?>"  <?= $country === $shipment['receiver_country'] ? 'selected' : '' ?> ><?= $country ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">    
                                        <h3 style="text-align: center;">SENDER INFORMATION</h3>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="sender_name" placeholder="Enter Sender Name" required value="<?=  $shipment['sender_name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="sender_email" placeholder="Enter Sender Email" required value="<?=  $shipment['sender_email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" name="sender_phone" placeholder="Enter Sender Phone Number" required value="<?=  $shipment['sender_contact'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>City/State</label>
                                            <input class="form-control" name="sender_city" placeholder="Enter Sender City/State" required value="<?=  $shipment['sender_city'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <!-- <input class="form-control" name="sender_country" placeholder="Enter Sender Country"> -->
                                            <select class="form-control" name="sender_country" required>
                                                <option disabled="">Select Receiver Country</option>
                                                <?php foreach($countries as $country): ?>
                                                     <option value="<?= $country ?>"  <?= $country === $shipment['sender_country'] ? 'selected' : '' ?> ><?= $country ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div> 
                                </div>    
                                <button type="submit" class="btn btn-success" name="add_shipment" style="margin-top: 50px; margin-bottom: 50px; position: relative; left: 50%; transform: translate(-50%);">update Shipment</button>
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
        autocomplete = new google.maps.places.Autocomplete(document.getElementById('departure_location'));
        autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('pickup_location'));
        autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('current_location'));
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
