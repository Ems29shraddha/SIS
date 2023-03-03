<?php
session_start();
$enrol=$_POST['enrol'];

$br1=$_POST['br1'];
$date1=$_POST['date1'];
$ppt=$_POST['ppt'];
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$father_name=$_POST['father_name'];
$occ1=$_POST['occ1'];
$income1=$_POST['income1'];
$mother_name=$_POST['mother_name'];
$occ2=$_POST['occ2'];
$income2=$_POST['income2'];
$dob=$_POST['dob'];
$aadhar=$_POST['aadhar'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$cat=$_POST['cat'];
$class=$_POST['class'];
$disable=$_POST['disable'];
$dtype=$_POST['dtype'];
$dper=$_POST['dper'];
$ins=$_POST['ins'];
$course=$_POST['course'];
$br2=$_POST['br2'];
$yar=$_POST['yar'];
$sem=$_POST['sem'];
$status=$_POST['status'];
$r6=$_POST['r6'];
	
$result1=$_POST['result1'];
$f_sub1=$_POST['f_sub1'];
$sgpa1=$_POST['sgpa1'];
$cgpa1=$_POST['cgpa1'];
	
$result2=$_POST['result2'];
$f_sub2=$_POST['f_sub2'];
$sgpa2=$_POST['sgpa2'];
$cgpa2=$_POST['cgpa2'];
	
$result3=$_POST['result3'];
$f_sub3=$_POST['f_sub3'];
$sgpa3=$_POST['sgpa3'];
$cgpa3=$_POST['cgpa3'];
	
$result4=$_POST['result4'];
$f_sub4=$_POST['f_sub4'];
$sgpa4=$_POST['sgpa4'];
$cgpa4=$_POST['cgpa4'];
	
$result5=$_POST['result5'];
$f_sub5=$_POST['f_sub5'];
$sgpa5=$_POST['sgpa5'];
$cgpa5=$_POST['cgpa5'];
	
$result6=$_POST['result6'];
$f_sub6=$_POST['f_sub6'];
$sgpa6=$_POST['sgpa6'];
$cgpa6=$_POST['cgpa6'];
    $s1=$_POST['s1'];
$b1=$_POST['b1'];
$p1=$_POST['p1'];
$a1=$_POST['a1'];
$g1=$_POST['g1'];
$s2=$_POST['s2'];
$b2=$_POST['b2'];
$p2=$_POST['p2'];
$a2=$_POST['a2'];
$g2=$_POST['g2'];
$s3=$_POST['s3'];
$b3=$_POST['b3'];
$p3=$_POST['p3'];
$a3=$_POST['a3'];
$g3=$_POST['g3'];
$s4=$_POST['s4'];
$b4=$_POST['b4'];
$p4=$_POST['p4'];
$a4=$_POST['a4'];
$g4=$_POST['g4'];
$s5=$_POST['s5'];
$b5=$_POST['b5'];
$p5=$_POST['p5'];
$a5=$_POST['a5'];
$g5=$_POST['g5'];
$mno=$_POST['mno'];
$fno=$_POST['fno'];
$email=$_POST['email'];
$cadd=$_POST['cadd'];
$padd=$_POST['padd'];
$dis=$_POST['dis'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$nation=$_POST['nation'];
$bank=$_POST['bank'];
$holder=$_POST['hold'];
$ano=$_POST['ano'];
$bb=$_POST['bob'];
$ifsc=$_POST['ifsc'];
$badd=$_POST['badd'];


date_default_timezone_set("Asia/Kolkata");
   date_default_timezone_set("Asia/Kolkata");
    $invoiceDate=date("Y-m-d");
$_SESSION['Roll']=$enrol;
$_SESSION['Branch']=$br1;
$_SESSION['Sem']=$sem;
$_SESSION['Cat']=$cat;
$_SESSION['Fname']=$fname;
$_SESSION['Mname']=$mname;
$_SESSION['Lname']=$lname;
$_SESSION['Apply']=$invoiceDate;


$con = @mysql_connect("localhost","root","");
mysql_select_db("stu_mang", $con);
	
	//echo '<script type="text/javascript">alert("New Purchase Inserted Succesfully");window.location=\'purchase.php\';</script>';
	$AddQuery ="update student set br1='$br1',date1='$date1',ppt='$ppt',r1='$r1',r2='$r2',fname='$fname',mname='$mname',lname='$lname',father_name='$father_name',occ1='$occ1',income1='$income1',mother_name='$mother_name',occ2='$occ2',income2='$income2',dob='$dob',aadhar='$aadhar',religion='$religion',gender='$gender',cat='$cat',class='$class',disable='$disable',dtype='$dtype',dper='$dper',ins='$ins',course='$course',br2='$br2',yar='$yar',sem='$sem',status='$status',r6='$r6',result1='$result1',sgpa1='$sgpa1',cgpa1='$cgpa1',result2='$result2',sgpa2='$sgpa2',cgpa2='$cgpa2',result3='$result3',sgpa3='$sgpa3',cgpa3='$cgpa3',result4='$result4',sgpa4='$sgpa4',cgpa4='$cgpa4',result5='$result5',sgpa5='$sgpa5',cgpa5='$cgpa5',result6='$result6',sgpa6='$sgpa6',cgpa6='$cgpa6',s1='$s2',b1='$b1',p1='$p1',a1='$a1',g1='$g1',s2='$s2',b2='$b2',p2='$p2',a2='$a2',g2='$g2',s3='$s3',b3='$b3',p3='$p3',a3='$a3',g3='$g3',s4='$s4',b4='$b4',p4='$p4',a4='$a4',g4='$g4',s5='$s5',b5='$b5',p5='$p5',a5='$a5',g5='$g5',mno='$mno',fno='$fno',email='$email',cadd='$cadd',padd='$padd',dis='$dis',state='$state',pin='$pin',nation='$nation',bank='$bank',holder='$holder',ano='$ano',bb='$bb',ifsc='$ifsc',badd='$badd' where enrol='$enrol'";
   mysql_query($AddQuery, $con);

echo '<script type="text/javascript">alert("Student Information Updated Succesfully");window.location=\'recipt.php\';</script>';
       
    
?>
