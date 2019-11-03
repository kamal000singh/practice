<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet"  href="css/style.css"></link>
  </head>
  <body style="background-image:url('background/bg2.jpg');
   background-repeat: no-repeat;
   background-position: center;
    background-attachment: fixed;
    background-size: cover;">

    <center>
      <div class="container">
      <h1>Registration Form</h1>
    <form class="" action="" method="post" enctype="multipart/form-data">
    <label>First Name</label><br>
    <input type="text" name="fname" placeholder="Enter First Name" required><br>
    <label>Last Name</label>  <br>
    <input type="text" name="lname" placeholder="Enter Last Name" required><br>
    <label>User Name</label>  <br>
    <input type="text" name="username" placeholder="Enter Unique UserName" required><br>
    <label>Date of Birth</label>  <br>
    <input type="date" name="dob" placeholder="Enter Date of Birth" required><br>
    <label>Password</label> <br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <label>Father Name</label> <br>
     <input type="text" name="fathername" placeholder="Enter Father Name" required><br>
    <label>Mother Name</label> <br>
     <input type="text" name="mothername" placeholder="Enter Mother Name" required><br>
    <label>Gender</label> <br>
     <input type="radio" name="gender" value="Male" /><span>Male </span>
     <input type="radio" name="gender" value="Male"/><span>Female</span><br>
    <label>Profile Upload</label> <br>
     <input type="file" name="fileupload" placeholder="Enter Profile Photo" ><br><br>
    <input type="submit" name="submit" value="Submit">
    <a href="login.php"><button type="button" name="button">Cancel</button></a>
      <a href="login.php"><button type="button" name="button">Login</button></a>
  </form>
  </div>
  </center>
  </body>
</html>
<?php
include('connection.php');
error_reporting(0);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$gender=$_POST['gender'];
$image=$_FILES['fileupload']['name'];
$tmpname=$_FILES['fileupload']['tmp_name'];
$folder="profile/".$image;
move_uploaded_file($tmpname,$folder);
if (isset($_POST['submit'])) {
  $check="SELECT * FROM USER_RECORD WHERE username='$username'";
  $duplicate=mysqli_query($conn,$check);
  if(mysqli_num_rows($duplicate)>0)
  {
    echo "<script>alert('UserName Already Exist');</script>";
  }
  else {
$table="CREATE TABLE $username(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30) NOT NULL,document VARCHAR(100) NOT NULL)";
if(mysqli_query($conn,$table))
{
$sql="INSERT INTO user_record(fname,lname,username,dob,password,fathername,mothername,gender,profile_pic)
 VALUES ('$fname','$lname','$username','$dob','$password','$fathername','$mothername','$gender','$folder') ";
$result=mysqli_query($conn,$sql);
  $msg="Registration Successfully";
  echo "<script> alert('$msg');</script>";
}
}
}
 ?>
