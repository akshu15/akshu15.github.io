<?php
include('connection/db.php');

$query=mysqli_query($conn,"select * from job_category");

session_start();
?>
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
                <a href="searchbar.php" class="nav-item nav-link"><i class="fa fa-home"></i> Home</a>
                <a href="about.php" class="nav-item nav-link"><i class="fa fa-user-circle" aria-hidden="true"></i> About Us</a>

                <a href="contact.php" class="nav-item nav-link"><i class="fa fa-fw fa-building"></i> Contact Us</a>
                
                <a href="admin/admin_login.php" class="nav-item nav-link"> Post a Job</a>

                <a href="login.php" class="nav-item nav-link"> Want a Job</a>
            </div>
        </div>
    </nav>
</div>
<!-----------Search Bar------------------>
    <div class="picture">         
        <div class="container job-quote-searchbar">
            <h1 class="job-quote">What you seek for<br/> is what we have.</h1>
            <form class="searchbar">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt keyword" name="key" id="key" placeholder="Enter Drop City">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <div class="dropdown1">
                                     <select name="category" id="category" class="search-slt">
                                    <option value="">Category</option>
                                    <?php
                                    while ($row=mysqli_fetch_array($query)) {
                                      ?>
                                      
                    <option value="<?php echo $row['job_id']; ?>"><?php echo $row['category']; ?></option>
                                    <?php
                                  }
                                  ?>
                                              </select>
                                 
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                <input type="submit" value="Search" name="search" id="search" class="btn search-btn">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

   