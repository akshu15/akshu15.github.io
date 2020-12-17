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
            <div class="all"><li class="breadcrumb-item"><a href="about_us.php">Home  /  </a></li></div>
            <li class="breadcrumb-item active">  Apply Job</li>
        </ol>
   </div>
            
      
    </div>

<?php
include('connection/db.php');

if (isset($_SESSION['email'])) {  
?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
<?php

$id=$_GET['id'];
$query=mysqli_query($conn,"select * from all_jobs where job_id='$id'");
while($row=mysqli_fetch_array($query)){
  $title=$row['job_title'];
  $job_des=$row['job_des'];
  $country=$row['country'];
  $state=$row['state'];
  $city=$row['city'];
  $job_id=$row['job_id'];
}
?>

            <h2 class="my-3"><?php echo $title;?></h2>
            <h5><?php echo $country;?>  <?php echo $state;?>  <?php echo $city;?></h5>
            <p><?php echo $job_des;?></p>
            
            <form action="apply_job.php" method="post" enctype="multipart/form-data" id="JobPortal" name="JobPortal">
              <div style="padding:2%; ">
              <div class="cols-lg-12">
                <div class="apply_job">
                  <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" id="email">
                  <input type="hidden" name="id_job" value="<?php echo $job_id; ?>" id="id_job">
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Enter Name</label>
                      <input type="text" name="fname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                      <label>Enter Last Name</label>
                      <input type="text" name="lname" class="form-control" placeholder="Last Name">
                    </div>

                     <div class="col-sm-6">
                      <label>Age</label>
                      <input type="int" name="age" class="form-control" placeholder="Age">
                    </div>
                    <div class="col-sm-6">
                      <label>Mobile Number</label>
                      <input type="int" name="phone" class="form-control" placeholder="Mobile number">
                    </div>
                    <div class="col-sm-12">
                      <label>Upload Resume</label>
                      <input type="file" name="file" id="file" class="form-control" style="padding: 30px;">
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" id="submit" value="Submit" class="btn apply-submit">
              </div>
            </div>
            </form>
</div>
</div>
</div>
</section>
            
    
<?php
include('include/footer.php');
?>
<?php
  }else{            
  header('location:login.php');
}
?>
