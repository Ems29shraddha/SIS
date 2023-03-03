<?php
$enrol=$_GET['roll'];
		$con=mysql_connect("localhost","root","");
		
		mysql_select_db("stu_mang",$con);
		
		$sql="delete from student where enrol='$enrol'";
		
		$result=mysql_query($sql,$con);
		
		echo '<script type="text/javascript">alert("Student information Deleteed Succesfully");window.location=\'profile.php\';</script>';