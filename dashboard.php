<?php
session_start();
error_reporting(0);
include("connection.php");
$username=$_SESSION['username'];
if($username==true)
{

}
else {
  header('location:login.php');
}
$query="SELECT * FROM USER_RECORD WHERE username='$username'";
$data=mysqli_query($conn,$query);
$display=mysqli_fetch_array($data);

	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style_profile.css"></link>
  </head>
  <body>
  <div class="box">
<div class="a1">
<span><b>USER PROFILE</b></span>
</div>
<div class="logout">
   <a href="logout.php">
  <button type="button" onclick="myAlert()"
  name="button">Logout</button>
</a>
</div>
<div class="b1">
<div class="info">
  <table border="0px solid" height="150px">
<tr>
  <td> Full Name : <?php echo $display['fname']." ".$display['lname']; ?></td>
  <td> Gender  : <?php echo $display['gender']; ?></td>
</tr><tr>
  <td> UserName  : <?php echo $display['username']; ?></td>
  <td> Date of Birth  : <?php echo $display['dob']; ?></td>
</tr><tr>
  <td> Father Name : <?php echo $display['fathername']; ?></td>
  <td> Mother Name : <?php echo $display['mothername']; ?></td>
</tr>
  </table>
  </div>
<div class="profile">
  <img src=" <?php echo $display['profile_pic']; ?>"
  width="100px" height="150px" alt="Profile Photo">
  </div>
 
</div>
<div class="c1">
<div class="add">
<div class="doc">
<form action="" method="POST" enctype="multipart/form-data">
Document Name :<br>
<input type="text" name="docname" 
 placeholder="Enter Document Name" required><br><br>
Add Document :	<br>
 <input type="file" name="document" required><br><br>
<input type="submit" name="add" value="Add">
</form>
<script>
function myAlert(){
alert('Logout Successfully');

}
</script>
</div>
</div>
<?php 
$docname=$_POST['docname'];
$document=$_POST['document'];
$data=$_FILES['document']['name'];
$tmpdata=$_FILES['document']['tmp_name'];
$upload="document/".$data;
move_uploaded_file($tmpdata,$upload);
if(isset($_POST['add']))
{
	$check="SELECT * FROM $username WHERE name='$docname' || document='$data'";
	$duplicate=mysqli_query($conn,$check);
	if(mysqli_num_rows($duplicate)>0)
	{
		echo "<script>alert('Document Name or File already exist ');</script>";
	}
else
{
$sql="INSERT INTO $username (name,document) VALUES('$docname','$data')";
if(mysqli_query($conn,$sql))
{
	echo"<script>alert('Insert Successfully');</script>";

}

}
}
?>
<div class="record">
<table border="1px solid"  width="800px" >
<th colspan="5" width="100%"  height="10px">
Document Detail</th>
<tr style="text-align:center;">
<td style="">S.NO</td>
<td>Document Name</td>
<td>Document Type</td>
<td>Download</td>
<td>Delete</td>
</tr>
	<?php
	if(isset($_REQUEST["delid"]))
	{
		$delid=$_REQUEST["delid"];
		$delete="delete from $username where id=$delid";
		mysqli_query($conn,$delete);
	}
	
	
$sql="SELECT * FROM $username";
$query=mysqli_query($conn,$sql);
if($query>0)
{
	$i=0;
	while($result=mysqli_fetch_assoc($query))
	{
		$i++;
		echo "<tr style='background-color:skyblue; text-align:center'>";
		echo "<td>".$i."</td>";
		echo "<td>".$result['name']."</td>";
		echo "<td>".$result['document']."</td>";
		echo "<td><a href='document/".$result['document']."' download>Download</a></td>";
		echo "<td><a href='dashboard.php?delid=".$result['id']."'>Delete</a></td>";
		echo "</tr>";
	}
}




?>	
	</table>
</div>
</div>
</body>
</html>
<?php /* if(isset($_POST['delete']))
{
	$name=$result['name'];
$delete="DELETE FROM $username WHERE name='$name'";
$delete_query=mysqli_query($conn,$delete);
echo "<script>alert('Delete Successfully');</script>";
}
*/	?>
