<?php
session_start();

$id=$_POST['id'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$nic=$_POST['nic'];
date_default_timezone_set("Asia/Kolkata");
    $invoiceDate=date("Y-m-d");
        
$con = @mysql_connect("localhost","root","");
mysql_select_db("stu_mang", $con);
	
	//echo '<script type="text/javascript">alert("New Purchase Inserted Succesfully");window.location=\'purchase.php\';</script>';
	$AddQuery ="insert into admin 	(id,user,pass,dob,email,mob,nic) 	values('".$id."','".$user."','".$pass."','".$dob."','".$email."','".$mob."','".$nic."')";
   mysql_query($AddQuery, $con);

echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'profile.php\';</script>';
	
?>
