<?php

session_start();

if(!isset($_SESSION['Id']))
{
	
?>
	<script language="javascript" type="text/javascript">
	window.location="login.html?msg=expire";
	</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Student Database Managment System | Admin Profile  :: </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Database Managment System | Admin Profile" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<!-- //photo -->
<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
        $(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:140px;width: 130px");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>
    <script language="javascript" type="text/javascript">
        $(function () {
            $("#fileupload1").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview1 = $("#dvPreview1");
                    dvPreview1.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:60px;width: 150px");
                                img.attr("src", e.target.result);
                                dvPreview1.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview1.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <?php include 'nav.php';?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					
<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Welcome </h2>
									<!-- tables -->
									
						<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									<p onclick="print()"> <img src="print.jpg" alt="HTML5 Icon" style="width:100px;height:40px;" align='right'>
		</p>
		
		<a href='profile.php'><img src="home.jpg" alt="HTML5 Icon" style="width:50px;height:50px;" align='right'></a>
									  <h3 class="w3_inner_tittle">Admission detail</h3>
		<?php
		$enrol=$_GET['roll'];
		$con=mysql_connect("localhost","root","");
		mysql_select_db("stu_mang",$con);
		$sql="select * from student where enrol='$enrol'";
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result)
		?>
			<form name="form" method="post" action="stu_update_in.php" enctype='multipart/form-data'>
			<div class="my-form">
			<table id="table-two-axis" class="two-axis">
			<tbody>
			<tr>
				<td><b><i>Enrollment No.</i></b></td>
				<td><input type="text" id="enrol" name="enrol"  value="<?php echo $row['enrol'];?>" readonly required></td>
				<td><b><i>Branch</i></b></td>
				<td><select name='br1' id='br1'>
						<option value="<?php echo $row['br1'];?>"><?php echo $row['br1'];?></option>
						<option value="civil engineering">civil engineering</option>
						<option value="machenical engineering">machenical engineering</option>
						<option value="electrial engineering">electrial engineering</option>
						<option value="computer science & engineering">computer science & engineering</option>
						</select></td>
				<td><b><i>Date of admission</i></b></td>
				<td><input type="text" id="date1" name="date1" placeholder='yyyy/mm/dd' value="<?php echo $row['date1'];?>" ></td>
			</tr>
			<tr>
				<td><b><i>ppt marks</i></b></td>
				<td><input type="text" id="ppt" name="ppt" value="<?php echo $row['ppt'];?>" ></td>
				<td><b><i>Name of Previous exam passed</i></b></td>
				<td><select name='r1' id='r1'>
						<option value="<?php echo $row['r1'];?>"><?php echo $row['r1'];?></option>
						<option value="10th">10th</option>
						<option value="12th">12th</option>
						<option value="Graduation">Graduation</option>
						</select></td>
				<td><b><i>Subject</i></b></td>
				<td><select name='r2' id='r2'>
						<option value="<?php echo $row['r2'];?>"><?php echo $row['r2'];?></option>
						<option value="Maths">Maths</option>
						<option value="Bio">Bio</option>
						<option value="AG">AG</option>
						<option value="Com">Com</option>
						<option value="Arts">Arts</option>
						<option value="Other">Other</option>
						</select>
					</td>
			</tr>
	</table>
	<br>
	<h3 class="w3_inner_tittle">Personal Details</h3>
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Student First name.</i></b></td>
				<td><input type="text" id="fname" name="fname" required value="<?php echo $row['fname'];?>"></td>
				<td><b><i>Middle Name</i></b></td>
				<td><input type="text" id="mname" name="mname" value="<?php echo $row['mname'];?>" ></td>
				<td><b><i>Last Name</i></b></td>
				<td><input type="date" id="lname" name="lname" required value="<?php echo $row['lname'];?>"></td>
			</tr>
			<tr>
				<td><b><i>Father Name</i></b></td>
				<td><input type="text" id="father_name" name="father_name" required value="<?php echo $row['father_name'];?>"></td>
				<td><b><i>Father's Occupation</i></b></td>
				<td><input type="text" id="occ1" name="occ1" value="<?php echo $row['occ1'];?>"></td>
				<td><b><i>Annual Income</i></b></td>
				<td><input type="text" id="income1" name="income1" value="<?php echo $row['income1'];?>"></td>
			</tr>
			<tr>
				<td><b><i>Mother Name</i></b></td>
				<td><input type="text" id="mother_name" name="mother_name" required value="<?php echo $row['mother_name'];?>"></td>
				<td><b><i>Mother's Occupation</i></b></td>
				<td><input type="text" id="occ2" name="occ2" value="<?php echo $row['occ2'];?>"></td>
				<td><b><i>Annual Income</i></b></td>
				<td><input type="text" id="income2" name="income2" value="<?php echo $row['income2'];?>" ></td>
			</tr>
			<tr>
				<td><b><i>DOB</i></b></td>
				<td><input type="text" id="dob" name="dob" placeholder='yyyy/mm/dd' value="<?php echo $row['dob'];?>"></td>
				<td><b><i>Aadhar no.</i></b></td>
				<td><input type="text" id="aadhar" name="aadhar" value="<?php echo $row['aadhar'];?>" ></td>
				<td><b><i>Religion</i></b></td>
				<td><input type="text" id="religion" name="religion" value="<?php echo $row['religion'];?>" ></td>
			</tr>
			<tr>
				<td><b><i>Gender</i></b></td>
				<td><select id="gender" name="gender">
			<option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</select></td>
				<td><b><i>Category</i></b></td>
				<td><select id="cat" name="cat">
		<option value="<?php echo $row['cat'];?>"><?php echo $row['cat'];?></option>
					<option value="ST">ST</option>
					<option value="SC">SC</option>
					<option value="OBC">OBC</option>
					<option value="GENERAL">GENERAL</option>
					<option value="OTHER">OTHER</option>
					</select></td>
				<td><b><i>Class</i></b></td>
				<td><select id="class" name="class">
		<option value="<?php echo $row['class'];?>"><?php echo $row['class'];?></option>
					<option value="FF">FF</option>
					<option value="Sainik">Sainik</option>
					<option value="Tech">Tech</option>
					<option value="HC">HC</option>
					<option value="None">None</option>
					</select></td>
			</tr>
			<tr><td><b><i>Class</i></b></td>
			<td><select name='disable' id='disable'>
					<option value="<?php echo $row['disable'];?>"><?php echo $row['disable'];?></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
					
					</select></td>
				<td><b><i>Type of disability</i></b></td>
				<td><select name='dtype' id='dtype'>
					<option value="<?php echo $row['dtype'];?>"><?php echo $row['dtype'];?></option>
					<option value="Hearing impaired">Hearing impaired</option>
					<option value="Visual impaired<">Visual impaired</option>
					<option value="Orthopaedically challenged">Orthopaedically challenged</option>
					</select></td>
					<td><b><i>Disability persent</i></b></td>
				<td><input type="text" id="dper" name="dper" placeholder="persent" value='<?php echo $row['dper'];?>'/>
					</td>
			</tr>
																			
	</table>
		<br>
		<h3 class="w3_inner_tittle">Academic Details</h3>
	<table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Institute</i></b></td>
				<td><input type="text" id="ins" name="ins" value="<?php echo $row['ins'];?>"></td>
				<td><b><i>Course</i></b></td>
				<td><input type="text" id="course" name="course"value="<?php echo $row['course'];?>" ></td>
				<td><b><i>Branch</i></b></td>
				<td><b><i><select name='br2' id='br2'>
						<option value="<?php echo $row['br2'];?>"><?php echo $row['br2'];?></option>
						<option value="civil engineering">civil engineering</option>
						<option value="machenical engineering">machenical engineering</option>
						<option value="electrial engineering">electrial engineering</option>
						<option value="computer science & engineering">computer science & engineering</option>
						</select></td>
				</td>
			</tr>
			<tr>
				<td><b><i>Year</i></b></td>
				<td><select name='yar' id='yar'>
					<option value="<?php echo $row['yar'];?>"><?php echo $row['yar'];?></option>
					<option value="first">first</option>
					<option value="second">second</option>
					<option value="final">final</option>
					</select></td>
				<td><b><i>Semster</i></b></td>
				<td><select name='sem' id='sem'>
					<option value="<?php echo $row['sem'];?>"><?php echo $row['sem'];?></option>
					<option value="I">I </option>
					<option value="II">II</option>
					<option value="III">III</option>
					<option value="IV">IV</option> 
					<option value="V">V</option>
					<option value="VI">VI</option>
					</select></td>
					<td><b><i>Status</i></b></td>
				<td><select name='status' id='status'>
					<option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
					<option value="Regular">Regular</option>
					<option value="Ex">Ex</option>
					</select>
					</td>
					
					</tr><tr>
				<td><b><i>Hostel Admission</i></b></td>
				<td colspan='5'>
				<select name='r6' id='r6'>
					<option value="<?php echo $row['r6'];?>"><?php echo $row['r6'];?></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
					</select>
					</td>
			</tr>
																			
	</table><br>
	<h3 class="w3_inner_tittle"> previous semster result</h3>
		<table id="table-two-axis" class="two-axis">
		<tr>																		
			<td><b><i>1</i></b></td>
			<td><b><i>I sem/1st year</i></b></td>
			<td><input type="text" id="result1" name="result1" value="<?php echo $row['result1'];?>"  size="30" ></td>
			<td><textarea id="f_sub1" name="f_sub1" value="<?php echo $row['f_sub1'];?>"><?php echo $row['cadd'];?></textarea></td>
			
			<td><input type="text" id="sgpa1" name="sgpa1" value="<?php echo $row['sgpa1'];?>"  size="12" ></td>	
			<td><input type="text" id="cgpa1" name="cgpa1" value="<?php echo $row['cgpa1'];?>"  size="8" ></td>
		</tr>
		<tr>			
			<td><b><i>2</i></b></td>	
			<td><b><i>II sem/1st year</i></b></td>	
			<td><input type="text" id="result2" name="result2" value="<?php echo $row['result2'];?>" size="30" ></td>
			<td><textarea id="f_sub2" name="f_sub2" value="<?php echo $row['f_sub2'];?>"><?php echo $row['cadd'];?></textarea></td>
			<td><input type="text" id="sgpa2" name="sgpa2" value="<?php echo $row['sgpa1'];?>" size="12"></td> 
			<td><input type="text" id="cgpa2" name="cgpa2" value="<?php echo $row['cgpa2'];?>" size="8" ></td>	
		</tr>			
		<tr>																		
			<td><b><i>3</td>																	
			<td><b><i>III sem/2nd year</i></b></td>	
			<td><input type="text" id="result3" name="result3" value="<?php echo $row['result3'];?>" size="30" ></td>
			<td><textarea id="f_sub3" name="f_sub3" value="<?php echo $row['f_sub3'];?>"><?php echo $row['cadd'];?></textarea></td>
			<td><input type="text" id="sgpa3" name="sgpa3" value="<?php echo $row['sgpa3'];?>" size="12"></td>	
			<td><input type="text" id="cgpa3" name="cgpa3" value="<?php echo $row['cgpa3'];?>" size="8" ></td> 
		</tr>
		<tr>			
			<td><b><i>4</i></b></td>		
			<td><b><i>IV sem/2nd year</i></b></td>
			<td><input type="text" id="result4" name="result4" value="<?php echo $row['result4'];?>" size="30" ></td>
			<td><textarea id="f_sub4" name="f_sub4" value="<?php echo $row['f_sub4'];?>"><?php echo $row['cadd'];?></textarea></td>
			<td><input type="text" id="sgpa4" name="sgpa4" value="<?php echo $row['sgpa4'];?>" size="12"></td>	
			<td><input type="text" id="cgpa4" name="cgpa4" value="<?php echo $row['cgpa4'];?>" size="8" ></td></tr>
		<tr>			
			<td><b><i>5</i></b></td>																	
			<td><b><i>V sem/final year</i></b></td>
			<td><input type="text" id="result5" name="result5" value="<?php echo $row['result5'];?>" size="30" ></td>
			<td><textarea id="f_sub5" name="f_sub5" value="<?php echo $row['f_sub5'];?>"><?php echo $row['cadd'];?></textarea></td>
			<td><input type="text" id="sgpa5" name="sgpa5" value="<?php echo $row['sgpa5'];?>" size="12"></td>	
			<td><input type="text" id="cgpa5" name="cgpa5" value="<?php echo $row['cgpa5'];?>" size="8" ></td> 
		</tr>
		<tr>			
			<td><b><i>6</i></b></td>
			<td><b><i>VI sem/final year</i></b></td>
			<td><input type="text" id="result6" name="result6" value="<?php echo $row['result6'];?>" size="30" ></td>
			<td><textarea id="f_sub6" name="f_sub6" value="<?php echo $row['f_sub6'];?>"><?php echo $row['cadd'];?></textarea></td>
			<td><input type="text" id="sgpa6" name="sgpa6" value="<?php echo $row['sgpa6'];?>" size="12"></td>
			<td><input type="text" id="cgpa6" name="cgpa6" value="<?php echo $row['cgpa6'];?>" size="8" ></td> 
		</tr>
	</table><br>
		<h3 class="w3_inner_tittle">Details of previous qualification</h3>
		<table id="table-two-axis" class="two-axis">
		<tr>																		
			<td><b><i>10th</i></b></td>
			<td><input type="text" id="s1" name="s1" placeholder="Subject" size="15"value="<?php echo $row['s1'];?>" ></td>
			<td><input type="text" id="b1" name="b1" placeholder="Board" size="30"
			value="<?php echo $row['b1'];?>" ></td>
			<td><input type="text" id="p1" name="p1" placeholder="Passing Year" size="12" 
			value="<?php echo $row['p1'];?>"></td>			
			<td><input type="text" id="a1" name="a1" placeholder="Percentage" size="8"
			value="<?php echo $row['a1'];?>" ></td>						
			<td><input type="text" id="g1" name="g1" placeholder="Grade" size="8"
			value="<?php echo $row['g1'];?>" ></td>
		</tr>
		<tr>			
			<td><b><i>12th</i></b></td>																	
			<td><input type="text" id="s2" name="s2" placeholder="Subject" size="15" 
			value=" <?php echo $row['s2'];?>" ></td>	
			<td><input type="text" id="b2" name="b2" placeholder="Board" size="30" 
			value=" <?php echo $row['b2'];?>"></td>
			<td><input type="text" id="p2" name="p2" placeholder="Passing Year" size="12" 
			value="<?php echo $row['p2'];?>"> </td> 
			<td><input type="text" id="a2" name="a2" placeholder="Percentage" size="8" 
			value="<?php echo $row['a2'];?>"> </td>
			<td><input type="text" id="g2" name="g2" placeholder="Grade" size="8" 
			value="<?php echo $row['g2'];?>"></td>
		</tr>			
		<tr>																		
			<td><b><i>Graduation</i></b></td>																	
			<td><input type="text" id="s3" name="s3" placeholder="Subject" size="15"
			value="<?php echo $row['s3'];?>" ></td>	
			<td><input type="text" id="b3" name="b3" placeholder="Board" size="30"
			value="<?php echo $row['b3'];?>" ></td>
			<td><input type="text" id="p3" name="p3" placeholder="Passing Year" size="12"
			value="<?php echo $row['p3'];?>"></td>	
			<td><input type="text" id="a3" name="a3" placeholder="Percentage" size="8" 
			value="<?php echo $row['a3'];?>"></td> 
			<td><input type="text" id="g3" name="g3" placeholder="Grade" size="8" 
			value="<?php echo $row['g3'];?>"></td>
		</tr>
		<tr>			
			<td><b><i>Gap if any</i></b></td>
			<td><input type="text" id="s4" name="s4" placeholder="Subject" size="15" 
			value="<?php echo $row['s4'];?>"></td>
			<td><input type="text" id="b4" name="b4" placeholder="Board" size="30" 
			value="<?php echo $row['b4'];?>"></td>
			<td><input type="text" id="p4" name="p4" placeholder="Passing Year" size="12"
			value="<?php echo $row['p4'];?>"></td>
			<td><input type="text" id="a4" name="a4" placeholder="Percentage" size="8"
			value="<?php echo $row['a4'];?>" ></td>
			<td><input type="text" id="g4" name="g4" placeholder="Grade" size="8"
			value="<?php echo $row['g4'];?>"></td> </tr>
		<tr>			
			<td><b><i>Other's</i></b></td>																	
			<td><input type="text" id="s5" name="s5" placeholder="Subject" size="15"value="<?php echo $row['s5'];?>" ></td>
			<td><input type="text" id="b5" name="b5" placeholder="Board" size="30" value="<?php echo $row['b5'];?>" ></td>
			<td><input type="text" id="p5" name="p5" placeholder="Passing Year" size="12"value="<?php echo $row['p5'];?>"></td>
			<td><input type="text" id="a5" name="a5" placeholder="Percentage" size="8" value="<?php echo $row['a5'];?>"></td> 
			<td><input type="text" id="g5" name="g5" placeholder="Grade" size="8"value="<?php echo $row['g5'];?>" ></td>
		</tr>
	</table>

<h3 class="w3_inner_tittle">Contact Details</h3>
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Mobile no.</i></b></td>
				<td><input type="text" id="mno" name="mno" required value="<?php echo $row['mno'];?>"></td>
				<td><b><i>Father Mobile no.</i></b></td>
				<td><input type="text" id="fno" name="fno" value="<?php echo $row['fno'];?>"></td>
				<td><b><i>Email ID</i></b></td>
				<td><input type="text" id="email" name="email" value="<?php echo $row['email'];?>"></td>
			</tr>
			<tr>
				<td><b><i>Current Address</i></b></td>
				<td><textarea id="cadd" name="cadd" value="<?php echo $row['cadd'];?>"><?php echo $row['cadd'];?></textarea></td>
				<td><b><i>Permanent Address</i></b></td>
				<td><textarea id="padd" name="padd" value="<?php echo $row['padd'];?>"><?php echo $row['padd'];?></textarea></td>
				<td><b><i>District</i></b></td>
				<td><input type="text" id="dis" name="dis" value="<?php echo $row['dis'];?>" ></td>
			</tr>
			<tr>
				<td><b><i>State</i></b></td>
				<td><input type="text" id="state" name="state" value="<?php echo $row['state'];?>"></td>
				<td><b><i>Pincode</i></b></td>
				<td><input type="text" id="pin" name="pin" value="<?php echo $row['pin'];?>"></td>
				<td><b><i>Nation</i></b></td>
				<td><input type="text" id="nation" name="nation" value="<?php echo $row['nation'];?>"></td>
			</tr>
			
		</table>	
<h3 class="w3_inner_tittle">Bank Details</h3>
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Name of Bank</i></b></td>
				<td><input type="text" id="bank" name="bank" value="<?php echo $row['bank'];?>"></td>
				<td><b><i>Account holder name</i></b></td>
				<td><input type="text" id="hold" name="hold" value="<?php echo $row['holder'];?>"></td>
				
				<td><b><i>Account no.</i></b></td>
				<td><input type="date" id="ano" name="ano" value="<?php echo $row['ano'];?>"></td>
			</tr>
			<tr>
				<td><b><i>bank of branch</i></b></td>
				<td><input type="text" id="bob" name="bob" value="<?php echo $row['bb'];?>"></td>
				<td><b><i>IFSC code</i></b></td>
				<td><input type="text" id="ifsc" name="ifsc" value="<?php echo $row['ifsc'];?>"></td>
				<td><b><i>Address</i></b></td>
				<td><textarea id="badd" name="badd"><?php echo $row['badd'];?></textarea></td>
			</tr>
		
		</table>			
			<h3 class="w3_inner_tittle">Scan Documents</h3>
					<table id="table-two-axis" class="two-axis">
							<tr>
				<td><b><i>Student's Photo</i></b></td>
				<td></td>
				<td><img src="photo/<?php echo $row['pic'];?>" width="130" height="140"></td>
				<td><b><i>Signature</i></b></td>
				<td></td>
				<td><img src="sign/<?php echo $row['sign'];?>" width="150" height="60"></td>
				</tr>
				</table>
				<br>
                               
        <button type="submit" class="btn btn-default">Update</button>																
																				</form>
																				
			<p onclick="print()"> <img src="print.jpg" alt="print" style="width:100px;height:40px;" align='right'>
		</p>
		
		<a href='profile.php'><img src="home.png" alt="home " style="width:50px;height:50px;" align='right'></a>
			</div>
									</div>
									                            
						</div>															
					
							<!-- //tables -->
					</div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>ɠ2017 GPCB. All Rights Reserved | Design by  <a href="http://octalitservices.com/" target="_blank">shraddha & team </a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->															
																				
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('.my-form .add-t').click(function(){
            var p = $('.text-t').length + 1;
            if( 20 < p ) {
                alert('Stop it!');
                return false;
            }
            var p_html = $('<p class="text-t"><label for="box' + p + '"><span class="t-number">' + p + '</span>&nbsp;&nbsp;DOCUMENTS NAME</label><input type="text" placeholder="DOC" name="d1[]" id="d1' + p + '" />&nbsp;<b>UPLOAD</b>&nbsp;<input type="file" name="d2[]" id="d2' + p + '" /><a href="#" class="remove-t"><b>Remove</b></a></p>');
            p_html.hide();
            $('.my-form p.text-t:last').after(p_html);
            p_html.fadeIn('slow');
            return false;
        });
        $('.my-form').on('click', '.remove-t', function(){
            $(this).parent().css( 'background-color', '#FF6C6C' );
            $(this).parent().fadeOut("slow", function() {
                $(this).remove();
                $('.t-number').each(function(index){
                    $(this).text( index + 1 );
                });
            });
            return false;
        });
    });
    </script>
          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>