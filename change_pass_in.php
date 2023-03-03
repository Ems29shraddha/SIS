<?php
session_start();
$ID=$_SESSION['Id'];

$cpass=$_POST['cpass'];
$npass=$_POST['password'];

$con = mysql_connect("localhost","root","");
	// Select Database
	  mysql_select_db("stu_mang", $con);
// Specify the query to execute
$sql = "select * from admin where id ='".$ID."'  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$pass=$row['pass'];

if($pass==$cpass)
{
$con = mysql_connect("localhost","root","");
	// Select Database
	  mysql_select_db("stu_mang", $con);
$sql = "Update admin  set pass='".$npass."' where id=".$ID."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Password Updated Succesfully");window.location=\'profile.php\';</script>';
}else
{
echo '<script type="text/javascript">alert("wrong current password ");window.location=\'change_pass.php\';</script>';
}
}
?>