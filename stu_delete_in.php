<?php
session_start();
$enrol=$_GET['roll'];

$con = @mysql_connect("localhost","root","");
mysql_select_db("stu_mang", $con);
	
	
	$AddQuery ="delete from student where enrol='$enrol'";
   mysql_query($AddQuery, $con);

echo '<script type="text/javascript">alert("Student Information Delete Succesfully");window.location=\'profile.php\';</script>';
       
    
?>
