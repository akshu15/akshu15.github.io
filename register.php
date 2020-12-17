<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title></title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/register.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="post" action="register.php" autocomplete="off">
                        <div class="row">
                            <div class="col-2">
                                <div class="input-group" >
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="Password" name="psd">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Repeat Password</label>
                                    <input class="input--style-4" type="Password" name="rpsd">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Work Experience</label>
                                    
                                    <div class="row">
                            <div class="col-2">
                                <div class="input-group">
                                    <select class="input--style-4" name="year">
                                          <option>Year</option><option>0</option><option>0-2</option><option>2-4</option><option>4-8</option><option>8-10</option><option>10-15</option><option>above 15</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select class="input--style-4" name="month">
                                          <option>Months</option><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
                                        </select>
                                </div>
                            </div>
                        </div>

                                </div>
                            </div>

                        </div>
                        <div>
                            <button class="btn" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
include('connection/db.php');

if(isset($_POST['submit'])){

  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $psd=$_POST['psd'];
  $rpsd=$_POST['rpsd'];
  $year=$_POST['year'];
  $month=$_POST['month'];

if ($psd=='' || $rpsd=='' || $psd!=$rpsd || $first_name=='' || $last_name=='' || $email=='' || $phone=='' || $year=='Year' || $month=='Months') {
    echo "<script>alert('invalid')</script>";
} else {

  $query=mysqli_query($conn,"insert into jobseeker(first_name,last_name,email,phone,psd,rpsd,year,month)values('$first_name','$last_name','$email','$phone','$psd','$rpsd','$year','$month')");

  if($query){
      echo "<script>alert('Inserted')</script>";
      header("location: http://localhost/job_portal/index.php");
    }else{
    echo "<script>alert('Not Inserted')</script>";
} 
}
}
?>
