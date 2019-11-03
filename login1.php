<?php
session_start();
include("connection.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor=rgba(255,255,255,.5) ><center>
    <div class="container" style="height:400px; width:500px; border-radius: 20px; margin-top:50px; background-color:rgba(0,0,0,.3">
<div class="logo" style="height:100px; width:100px; border:0px solid;">
<img src="login.png" alt="" style="height:100px; width:100px; margin-top: 70px; margin-bottom:0px;"   >
</div>


    <form class="" action="" method="post" style="margin-top:100px;">
      <label style="font-size:25px; font-color:grey;"> <b>Username </b></label>
      <input type="text" style="font-size:25px; border-radius:10px;" name="username" placeholder="Enter Username" required><br><br>
      <label style="font-size:25px;"><b>Password </b></label>
      <input type="password" name="password" style="font-size:25px; border-radius:10px;" placeholder="Enter Password" required><br><br>
      <input type="submit" style="font-size:25px; border-radius:10px;" name="submit">
       <input type="reset" style="font-size:25px; border-radius:10px;" name="reset" >

    </form>
    </div>
  </center>
  </body>
</html>
<?php

if(isset($_POST["submit"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query="SELECT * FROM STUDENT WHERE username='$username' && password='$password'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['username']=$username;
		header ("location:dashboard.php") ;

	}
	else
	{
		echo " Password Incorrect";
	}
}
 ?>
