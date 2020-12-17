<?php
include('connection/db.php');
include('include/header2.php');
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
        <div class="container job-quote-searchbar">
            <h1 class="job-quote">What you seek for<br/> is what we have.</h1>
            <form class="searchbar" action="home.php" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="text" class="form-control search-slt keyword" name="key" id="key" placeholder="eg. Garphic. Web Developer">
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

 <!----------Resume FAQ InterviewPrep------>

      <div class="container">
        <div class="row">

          <div class="col-md-4 card1">
            
            <div class="card1-content">
              <img src="img/resume.png" alt="Interview" style="padding: 10px;">
              <div class="media-body">
                <h3 class="heading mb-3">Resume Writing</h3>
                <p>Mail us here:<br/>
                info@dhanda.com</p>
              </div>
            </div>
                  
          </div>

          <div class="col-md-4 card1" style="padding: 15px;">
            
            <div class="card1-content">
              <img src="img/question.png" alt="Interview" style="padding: 10px;">
              <div class="media-body">
                <h3 class="heading mb-3">FAQ</h3>
                <p>Contact Us:<br/>
                Phone: 1800­-102-5557</p>
              </div>
            </div>
                 
          </div>

          <div class="col-md-4 card1" style="padding: 15px;">
           
            <div class="card1-content">
              <img src="img/reunion.png" alt="Interview" style="padding: 10px;">
              <div class="media-body">
                <h3 class="heading mb-3">Interview Preparation</h3>
                <p>Dhanda.com<br/>
                amrita@gmail.com</p>
              </div>
            </div> 
               
          </div>
        </div>
      </div>

       <?php

if (isset($_POST['search'])) {

  $keyword=$_POST['key'];
  $category=$_POST['category'];

  $query=mysqli_query($conn,"select * from all_jobs LEFT JOIN company ON all_jobs.customer_email=company.admin where keyword LIKE '%$keyword%' OR category='$category'");
?>

  <section class="bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center mt-4">
            <span style="color: #c3c3c3;">Recently Added Jobs</span>
            <h2 class="mb-4 p-3"><span style="font-weight: normal;">Recent</span> Jobs</h2>
          </div>
        </div>
        <div class="row">

<?php
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="col-md-12 pb-3">

            <div class=" bg-white p-4 d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                
                  <h2 style="font-weight: normal;"><?php echo $row['job_title']; ?></h2>
               
                <div class="d-md-flex">
                  <div class="mr-3" style="color: #9900CC; "><i class="fa fa-building"></i> <?php echo $row['company_name']; ?></div>
                  <div><img src="images/location.png"> <?php echo $row['country']; ?> , <?php echo $row['state']; ?> , <?php echo $row['city']; ?></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="blog-single.php?id=<?php echo $row['job_id']; ?>" class="btn apply py-2 mr-1">Apply Job</a>
                
               
              </div>
            </div>
          </div><!-- end -->


<?php
}

}
?>
</div>
</div>
</section>
<!-----------------------Footer------------------>

<?php
include('include/footer.php');
?>
