<?php
include('connection/db.php');
$query=mysqli_query($conn,"select * from job_category");

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dhanda.com</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!----datatables css--->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!--------Icon link--------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/jobseeker.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>


<body>     
    <!---Navbar------->
<div class="bs-example">
    <nav class="navbar navbar-expand-md">
       <!-- <a href="#" class="navbar-brand">Brand</a>-->
       <div class="company-logo">
            <img class="logo" src="img/logo1.png" alt="logo">
            <h1 class="heading"> Dhanda.com </h1>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"><i class="fa fa-fw fa-bars" style="color: #fff; font-size: 20px;"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                

            </div>
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link"><i class="fa fa-home"></i> Home</a>
                <a href="about_us.php" class="nav-item nav-link"><i class="fa fa-user-circle" aria-hidden="true"></i> About Us</a>

                <a href="contact_us.php" class="nav-item nav-link"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
                
                 <?php
            if (isset($_SESSION['email'])) { ?>
              <a href="logout.php" class="nav-item nav-link"> Logout</a>
              <?php
            }else{ ?>
              <a href="admin/admin_login.php" class="nav-item nav-link"> Post a Job</a>

              <a href="login.php" class="nav-item nav-link"> Want a Job</a>
            <?php
          }
          ?>
            </div>
        </div>
    </nav>
</div>
<!-----------Search Bar------------------>
    <div class="picture">         
       
              
        <div class="ab"><ol class="breadcrumb">
            <div class="all"><li class="breadcrumb-item"><a href="home.php">Home  /  </a></li></div>
            <li class="breadcrumb-item active">  Contact Us</li>
        </ol>
   </div>
            
      
    </div>




	  <div class="row py-4">
    <div class=" col-md-6 xs-12">

            <h2 class="col-md-12 pt-5 pb-4">Contact Information</h2>
         
          <div class="col-md-12">
           <p><i class="fa fa-map-marker pr-2" aria-hidden="true"></i>Address: 222, 2nd Floor, Chintamani Plaza,Andheri East, Mumbai, Maharashtra 400099</p>
          </div>
          <div class="col-md-12 ">
            <p><i class="fa fa-phone pr-2" aria-hidden="true"></i>Phone: 1800­-102-5557(9.00 AM to 8.00PM ISt)</p>
          </div>
          <div class="col-md-12 contact">
            <p><i class="fa fa-envelope pr-2" aria-hidden="true" pr-2></i>Email: <a href="mailto:Dhanda.com">info@dhanda.com</a></p>
          </div>
          <div class="col-md-12 pb-5 contact">
            <p><i class="fa fa-info pr-2" aria-hidden="true"></i>Website: <a href="home.php">Dhanda.com</a></p>
          </div>
    	
    </div>

    <img src="img/con_pic.jpg"class=" col-md-6 xs-12 pic">


</div>

<?php
include('include/footer.php');
?>