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
$badd=$_POST['add'];
$fileupload=$_FILES['fileupload']['name'];
$fileupload1=$_FILES['fileupload1']['name'];
    $pic =$fileupload;
	$sign=$fileupload1;
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



 
$d1=$_POST['d1'];
$d2=$_FILES['d2']['name'];


$j = 0;
                 for ($i = 0; $i < count($_FILES['d2']['name']); $i++) {
                 
		if (($_FILES["d2"]["size"][$i] < 100000000)) {
		 $hello=$_FILES['d2']['name'][$i];
		 //$lo=$fmno;
		 //$hello="$lo$he";
		 echo $hello;
            $s_f = $_FILES['d2']['tmp_name'][$i]; // Storing source path of the file in a variable
                $t_f = "doc/".$hello;
                //$t_f = "doc/".$_FILES['d2']['name'][$i];
                move_uploaded_file($s_f,$t_f) ; // Moving Uploaded file
                echo "<span id='success'>Doc Uploaded Successfully...!!</span><br/>";
               
        } else {//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
    
 echo count($_FILES['d2']['name']);


	$allowedExtension = array("jpeg", "jpg", "png");
    $fileExtension = pathinfo($_FILES["fileupload"]["name"], PATHINFO_EXTENSION);
     if(in_array($fileExtension,$allowedExtension)){
        if($_FILES["fileupload"]["size"] < 100000000 && $_FILES["fileupload1"]["size"] < 100000000){ //Approx. 60kb files can be uploaded.
            if ($_FILES["fileupload"]["error"] > 0 && $_FILES["fileupload1"]["error"] > 0){
                echo "Return Code: " . $_FILES["fileupload"]["error"] . "<br/><br/>";
            }else{
              
                $sourcePath = $_FILES['fileupload']['tmp_name']; // Storing source path of the file in a variable
                //$targetPath = "photo/".$_FILES['file']['name']; // Target path where file is to be stored
                $targetPath = "photo/".$pic;
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                echo "<span id='success'>Student's Pic Uploaded Successfully...!!</span><br/>";
                 $source = $_FILES['fileupload1']['tmp_name']; // Storing source path of the file in a variable
                $target = "sign/".$sign;
                move_uploaded_file($source,$target) ; // Moving Uploaded file
                echo "<span id='success'>Father's Pic Uploaded Successfully...!!</span><br/>";
               
$con = @mysql_connect("localhost","root","");
mysql_select_db("stu_mang", $con);
	
	//echo '<script type="text/javascript">alert("New Purchase Inserted Succesfully");window.location=\'purchase.php\';</script>';
	$AddQuery ="insert into student 	(enrol,br1,date1,ppt,r1,r2,fname,mname,lname,father_name,occ1,income1,mother_name,occ2,income2,dob,aadhar,religion,gender,cat,class,disable,dtype,dper,ins,course,br2,yar,sem,status,r6,result1,f_sub1,sgpa1,cgpa1,result2,f_sub2,sgpa2,cgpa2,result3,f_sub3,sgpa3,cgpa3,result4,f_sub4,sgpa4,cgpa4,result5,f_sub5,sgpa5,cgpa5,result6,f_sub6,sgpa6,cgpa6,s1,b1,p1,a1,g1,s2,b2,p2,a2,g2,s3,b3,p3,a3,g3,s4,b4,p4,a4,g4,s5,b5,p5,a5,g5,mno,fno,email,cadd,padd,dis,state,pin,nation,bank,holder,ano,bb,ifsc,badd,pic,sign,d1,d2,apply) 	values('".$enrol."','".$br1."','".$date1."','".$ppt."','".$r1."','".$r2."','".$fname."','".$mname."','".$lname."','".$father_name."','".$occ1."','".$income1."','".$mother_name."','".$occ2."','".$income2."','".$dob."','".$aadhar."','".$religion."','".$gender."','".$cat."','".$class."','".$disable."','".$dtype."','".$dper."','".$ins."','".$course."','".$br2."','".$yar."','".$sem."','".$status."','".$r6."','".$result1."','".$f_sub1."','".$sgpa1."','".$cgpa1."','".$result2."','".$f_sub2."','".$sgpa2."','".$cgpa2."','".$result3."','".$f_sub3."','".$sgpa3."','".$cgpa3."','".$result4."','".$f_sub4."','".$sgpa4."','".$cgpa4."','".$result5."','".$f_sub5."','".$sgpa5."','".$cgpa5."','".$result6."','".$f_sub6."','".$sgpa6."','".$cgpa6."','".$s1."','".$b1."','".$p1."','".$a1."','".$g1."','".$s2."','".$b2."','".$p2."','".$a2."','".$g2."','".$s3."','".$b3."','".$p3."','".$a3."','".$g3."','".$s4."','".$b4."','".$p4."','".$a4."','".$g4."','".$s5."','".$b5."','".$p5."','".$a5."','".$g5."','".$mno."','".$fno."','".$email."','".$cadd."','".$padd."','".$dis."','".$state."','".$pin."','".$nation."','".$bank."','".$holder."','".$ano."','".$bb."','".$ifsc."','".$badd."','".$pic."','".$sign."','" . implode(',', $_POST['d1']) . "','" . implode(',', $_FILES['d2']['name']) . "','".$invoiceDate."')";
   mysql_query($AddQuery, $con);

echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'recipt.php\';</script>';
	}
       
    }else{
        //echo "<span id='invalid'>***File size is greater than 60Kb***<span>";
        echo '<script type="text/javascript">alert("***File size is greater than 100Kb***");window.location=\'reg_form.php\';</script>';
    }
}else{
    //echo "<span id='invalid'>***Invalid file Type***<span>";
    echo '<script type="text/javascript">alert("***Invalid file Type*** Use JPG file");window.location=\'reg_form.php\';</script>';
}
?>
