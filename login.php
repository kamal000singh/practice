<?php
session_start();
include("connection.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

    </style>
  </head>
  <body bgcolor=rgba(255,255,255,.5) ><center>
    <div class="container" style="height:450px; width:600px; border-radius: 20px; margin-top:50px; background-color:rgba(0,0,0,.3">
<div class="logo" style="height:100px; width:100px; border:0px solid;">
<img src="logo.png" alt="" style="height:100px; width:100px; margin-top: 70px; margin-bottom:0px;"   >
</div>


    <form class="" action="" method="post" style="margin-top:100px;">
      <table border="0px solid">
        <tr>
        <td>
      <label style="font-size:25px; ">
        <b>User Name </b></label></td>
      <td><input type="text" style="font-size:25px; border-radius:10px;" name="username" placeholder="Enter Username" required>
      </td></tr><tr>
         <td></td><td></td> </tr><tr> <td></td><td></td> </tr>
      <tr><td><label style="font-size:25px;"><b>Password </b></label></td>
      <td><input type="password" name="password" style="font-size:25px; border-radius:10px;" placeholder="Enter Password" required>
      </td>
      </tr>
        </table>
      <br><br>
      <input type="submit" style="font-size:25px; border-radius:10px; " name="submit" value="Submit">
       <input type="reset" style="font-size:25px; border-radius:10px; " name="reset" value="Reset"><br><br>
       Create New Account? <a href="registration.php">SignUp</a>

  </center>
  </body>
</html>
<?php

if(isset($_POST["submit"]))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM USER_RECORD WHERE username='$username' && password='$password'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['username']=$username ;
		header ("location:dashboard.php") ;

	}
	else
	{
    $msg="Password Incorrect";
		echo "<script> alert('$msg');</script>";
	}
}
 ?>
