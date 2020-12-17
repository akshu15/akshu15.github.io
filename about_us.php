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
            <li class="breadcrumb-item active">  About Us</li>
        </ol>
   </div>
            
      
    </div>



<div class="col-md-12 mb-12 p-5 about"> 

<p>Dhanda.com is the largest jobsite in India. It is part of Info Edge India (Ltd), India’s leading Internet Company with well-known brands like 99acres.com, jeevansathi.com & Shiksha.com.The popularity of the portal is evident from the fact that it has crossed the 3 crore candidate landmark and has more than 3 lakh latest job vacancies from leading companies on the site.</p>

<p>Having revolutionized the online classified space, today Info Edge has a market capitalization of over Rs. 95 billion, an employee base of 3800 associates, with presence in 41 cities in India and Middle East, and we’re geared to grow much bigger. Our financial track record shows a strong upward trend – Net Sales in FY 13-14 were Rs. 5051 Million with CAGR of 21.4% for the last 5 year period.</p>

<p>Dhanda.com connects jobseekers and recruiters by accurately matching candidate profiles to the relevant job openings through an advanced 2-way matching technology. While most job portals only focus on getting candidates the next job, Dhanda focuses on the entire career growth of candidates. To this end, Dhanda has launched Dhanda Learning- India’s largest career skills site for working professionals with over 500+ courses & certifications.</p>


<p>The revenues of Dhanda were 315 crore in FY 2013-14 with a consistent upward growth rate. The no. of resumes in the database increased by 12% to about 37 million at the end FY2014. Being a leader in its category, Dhanda.com is forever pushing the boundaries with new-edge innovations and technology. We have integrated the semantic search mechanism from a recently acquired Company, Makesense Technologies to significantly improve the job search of the site and make it more efficient for users.</p>

<p>Dhanda works closely to bridge the gap between talent & opportunities and offers end-to-end recruitment solutions. Dhanda Job Fair brings candidates and top employers under one roof. While Dhanda HR Conclave brings top HR leaders to share insights on latest trends, innovations & best practices in the HR industry. Dhanda also has a large reach through its print product, Dhanda Jobs – the Tuesday Job supplement of Hindustan Times– making it the only job portal with an integrated print and online offering</p>

<p>We also launched a mobile application that is based on both iOS and android platforms, and a SAS based Career Site Manager. All these developments have received a great response from users leading to more engaged jobseekers and satisfied customers.</p>




</div>

<?php
include('include/footer.php');
?>