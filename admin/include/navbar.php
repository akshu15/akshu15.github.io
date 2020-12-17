<?php
include('connection/db.php');

$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and admin_type = '1' ");

if (mysqli_num_rows($query)>0) {
?>

<!---Navbar------->
<div class="bs-example">
    <nav class="navbar navbar-expand-md">
       <!-- <a href="#" class="navbar-brand">Brand</a>-->
       <div class="company-logo">
            <img class="logo"  onclick="admin_dashboard.php" src="../img/logo1.png" alt="logo">
            <h1 class="heading"> Dhanda.com </h1>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"><i class="fa fa-fw fa-bars" style="color: #fff; font-size: 20px;"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="admin_dashboard.php" class="nav-item nav-link"><i class="fa fa-home"></i> Dashboard</a>
                <a href="customers.php" class="nav-item nav-link"><i class="fa fa-user-circle" aria-hidden="true"></i> Customers</a>
                <a href="create_company.php" class="nav-item nav-link"><i class="fa fa-fw fa-building"></i> Companies</a>
                
                <a href="category.php" class="nav-item nav-link"><i class="fa fa-fw fa-info"></i> Category</a>

            </div>
            <div class="navbar-nav">
                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-fw fa-user"></i>Sign Out</a>
            </div>
        </div>
    </nav>
</div>

<?php

}else{
  ?>

<!---Navbar------->
<div class="bs-example">
    <nav class="navbar navbar-expand-md">
       <!-- <a href="#" class="navbar-brand">Brand</a>-->
       <div class="company-logo">
            <img class="logo"  onclick="admin_dashboard.php" src="../img/logo1.png" alt="logo">
            <h1 class="heading"> Dhanda.com </h1>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"><i class="fa fa-fw fa-bars" style="color: #fff; font-size: 20px;"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="admin_dashboard.php" class="nav-item nav-link"><i class="fa fa-home"></i> Dashboard</a>
                <a class="nav-link" href="job_create.php">
                  <i class="fa fa-plus-square" aria-hidden="true" ></i>
                  Create Job
                </a>
                <a class="nav-link" href="apply_jobs.php">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                  Job Seeker
                </a>
            </div>
            <div class="navbar-nav">
                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-fw fa-user"></i>Sign Out</a>
            </div>
        </div>
    </nav>
</div>

<?php 
}
?>