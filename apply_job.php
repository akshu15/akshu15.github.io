<?php
include('connection/db.php');

if(isset($_POST['submit'])){

  $files='files/';

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $age=$_POST['age'];
  $file=$_FILES['file']['name'];
  $tmp_name=$_FILES['file']['tmp_name'];
  $id_job=$_POST['id_job'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];

  $query1=mysqli_query($conn,"select * from apply_job where email='$email' and id_job='$id_job'");

  if(mysqli_num_rows($query1)>0){
    echo"<script>alert('Already Applied')</script>";
  }else{


  move_uploaded_file($tmp_name,$files.$file);

  $query=mysqli_query($conn,"insert into apply_job(fname,lname,age,file,id_job,email,phone)values('$fname','$lname','$age','$file','$id_job','$email','$phone')");

$loc="home.php";

  if($query){
   
  echo"<script>alert('Details uploaded.')</script>";
  header("location:$loc");

    }else{
    echo "<script>alert('Details not uploaded try again.')</script>";
    header('location:blog-single.php');
} 
}
}

?>
