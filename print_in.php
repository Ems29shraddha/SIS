
<?php

		$enrol=$_POST['enrol'];
		//echo $enrol;	
		$con=mysql_connect("localhost","root","");
		mysql_select_db("stu_mang",$con);
		$sql="select * from student where enrol='$enrol'";
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
?>
<html>
<head>
<title>recipt</title>

</head>
<body>
<a href='profile.php'><img src="home.jpg" alt="HTML5 Icon" style="width:50px;height:50px;" align='right'></a>

<table border='' width='1000' align='center'>
<tr><td>

<h1  style="color:  blue;" align="center"><i><b><u>Government Polytechnic College Balaghat (M.P) </U></b></i></h1>
<h2 style="color: brown" align="center">ADMISSION FORM</h2>

<table align='center' width='950' border="0" ><tr><td>
	<h3 ><u>Admission Details </u></h3>
	<form name="form" method="post"  enctype='multipart/form-data'>
	<table >
	<tbody>
	<tr><td> <?php echo $row['apply'];?></td></tr>
			<tr width="1200px" >
				<td width="250px "><b><i>Enrollment No. *</i></b></td>
				<td width="250px "> <?php echo $row['enrol'];?></td>
				<td width="250px "><b><i>Branch *</i></b></td>
				<td width="250px "><?php echo $row['br2'];?> </td>
				<td width="250px "> <b><i>Date of admission *</i></b></td>
				<td width="250px "><?php echo $row['date1'];?> </td>
			</tr>
			<tr>
				<td width="250px "><b><i>ppt marks *</i></b></td>
				<td width="250px "><?php echo $row['ppt'];?> </td>
				<td width="250px "><b><i>Name of Previous exam passed *</i></b></td>
				<td width="250px "><?php echo $row['r1'];?> </td>
				<td width="250px "><b><i>Subject</i></b></td>
				<td width="250px "><?php echo $row['r2'];?> </td>
			</tr>
																			
	</table></td></tr></table>
	<br>
	<table align='center' width='950' border="0" ><tr><td>
	
	<h3 >Personal Details</h3>
 <table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Student First name *</i></b></td>
				<td width="250px "><?php echo $row['fname'];?></td>
				<td width="250px "><b><i>Middle Name</i></b></td>
				<td width="250px "><?php echo $row['mname'];?></td>
				<td width="250px "><b><i>Last Name *</i></b></td>
				<td width="250px "><?php echo $row['lname'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Father Name *</i></b></td>
				<td width="250px "><?php echo $row['father_name'];?></td>
				<td width="250px "><b><i>Father's Occupation *</i></b></td>
				<td width="250px "><?php echo $row['occ1'];?></td>
				<td width="250px "><b><i>Annual Income *</i></b></td>
				<td width="250px "><?php echo $row['income1'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Mother Name *</i></b></td>
				<td width="250px "><?php echo $row['mother_name'];?></td>
				<td width="250px "><b><i>Mother's Occupation *</i></b></td>
				<td width="250px "><?php echo $row['occ2'];?></td>
				<td width="250px "><b><i>Annual Income *</i></b></td>
				<td width="250px "><?php echo $row['income2'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>DOB *</i></b></td>
				<td width="250px "><?php echo $row['dob'];?></td>
				<td width="250px "><b><i>Aadhar no.*</i></b></td>
				<td width="250px "><?php echo $row['aadhar'];?></td>
				<td width="250px "><b><i>Religion *</i></b></td>
				<td width="250px "><?php echo $row['religion'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Gender *</i></b></td>
				<td width="250px "><?php echo $row['gender'];?></td>
				<td width="250px "><b><i>Category *</i></b></td>
				<td width="250px "><?php echo $row['cat'];?></td>
				<td width="250px "><b><i>Class *</i></b></td>
				<td width="250px "><?php echo $row['class'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Are you a person with disability </i></b></td>
				<td width="250px "><?php echo $row['disable'];?>
					</td>
				<td width="250px "><b><i>Type of disability</i></b></td>
				<td width="250px "><?php echo $row['dtype'];?></td>
				<td width="250px "><b><i>Disability persent</i></b></td>
				<td width="250px ">	<?php echo $row['dper'];?></td>
			</tr>
																			
	</table></td></tr></table>
		<br>
		<table align='center' width='950' border="0" ><tr><td>
		<h3 >Academic Details</h3>
	<table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Institute *</i></b></td>
				<td width="250px "><?php echo $row['ins'];?></td>
				<td width="250px "><b><i>Course *</i></b></td>
				<td width="250px "><?php echo $row['course'];?></td>
				<td width="250px "><b><i>Branch *</i></b></td>
				<td width="250px "><?php echo $row['br2'];?></td>
				</td>
			</tr>
			<tr>
				<td width="250px "><b><i>Year *</i></b></td>
				<td width="250px "><?php echo $row['yar'];?></td>
				<td width="250px "><b><i>Semster*</i></b></td>
				<td width="250px "><?php echo $row['sem'];?></td>
					<td width="250px "><b><i>Status*</i></b></td>
				<td width="250px "><?php echo $row['status'];?> 
					
					</td>
					
					</tr><tr>
				<td width="250px "><b><i>Hostel Admission*</i></b></td>
				<td  width="250px "><?php echo $row['r6'];?>
					</td>
			</tr>
																			
	</table></td></tr></table><br>
	<table align='center' width='950' border="0" ><tr><td>
	<h3 > previous semster result</h3>
		<table >
		<tr>																		
			<td width="25px "><b><i>1</i></b></td>
			<td width="250px "><b><i>I sem/1st year</i></b></td>
			<td width="250px "><?php echo $row['result1'];?></td>
			<td width="250px "><?php echo $row['f_sub1'];?></td>
			<td width="250px "><?php echo $row['sgpa1'];?></td>	
			<td width="250px "><?php echo $row['cgpa1'];?></td>
		</tr>
		<tr>			
			<td width="25px "><b><i>2</i></b></td>	
			<td width="250px "><b><i>II sem/1st year</i></b></td>	
			<td width="250px "><?php echo $row['result2'];?></td>
			<td width="250px "><?php echo $row['f_sub2'];?></td>
			<td width="250px "><?php echo $row['sgpa2'];?></td>	
			<td width="250px "><?php echo $row['cgpa2'];?></td>
		</tr>			
		<tr>																		
			<td width="25px "><b><i>3</td>																	
			<td width="250px "><b><i>III sem/2nd year</i></b></td>	
			<td width="250px "><?php echo $row['result3'];?></td>
			<td width="250px "><?php echo $row['f_sub3'];?></td>
			<td width="250px "><?php echo $row['sgpa3'];?></td>	
			<td width="250px "><?php echo $row['cgpa3'];?></td>
		</tr>
		<tr>			
			<td width="25px "><b><i>4</i></b></td>		
			<td width="250px "><b><i>IV sem/2nd year</i></b></td>
			<td width="250px "><?php echo $row['result4'];?></td>
			<td width="250px "><?php echo $row['f_sub4'];?></td>
			<td width="250px "><?php echo $row['sgpa4'];?></td>	
			<td width="250px "><?php echo $row['cgpa4'];?></td></tr>
		<tr>			
			<td width="25px "><b><i>5</i></b></td>																	
			<td width="250px "><b><i>V sem/final year</i></b></td>
			<td width="250px "><?php echo $row['result5'];?></td>
			<td width="250px "><?php echo $row['f_sub5'];?></td>
			<td width="250px "><?php echo $row['sgpa5'];?></td>	
			<td width="250px "><?php echo $row['cgpa5'];?></td>
		</tr>
		<tr>			
			<td width="25px "><b><i>6</i></b></td>
			<td width="250px "><b><i>VI sem/final year</i></b></td>
			<td width="250px "><?php echo $row['result6'];?></td>
			<td width="250px "><?php echo $row['f_sub6'];?></td>
			<td width="250px "><?php echo $row['sgpa6'];?></td>	
			<td width="250px "><?php echo $row['cgpa6'];?></td>
		</tr>
	</table></td></tr></table><br>
	<table align='center' width='950' border="0" ><tr><td>
		<h3 class="w3_inner_tittle">Details of previous Qualification</h3>
		<table id="table-two-axis" class="two-axis">
		<tr>																		
			<td width="250px "><b><i>10th *</i></b></td>
			<td width="250px "><?php echo $row['s1'];?></td>
			<td width="250px "><?php echo $row['b1'];?></td>
			<td width="250px "><?php echo $row['p1'];?></td>			
			<td width="250px "><?php echo $row['a1'];?></td>
			<td width="250px "><?php echo $row['g1'];?></td>
		</tr>
		<tr>			
			<td width="250px "><b><i>12th</i></b></td>
			<td width="250px "><?php echo $row['s2'];?></td>
			<td width="250px "><?php echo $row['b2'];?></td>
			<td width="250px "><?php echo $row['p2'];?></td>			
			<td width="250px "><?php echo $row['a2'];?></td>
			<td width="250px "><?php echo $row['g2'];?></td>
		</tr>			
		<tr>																		
			<td width="250px "><b><i>Graduation</i></b></td>
			<td width="250px "><?php echo $row['s3'];?></td>
			<td width="250px "><?php echo $row['b3'];?></td>
			<td width="250px "><?php echo $row['p3'];?></td>			
			<td width="250px "><?php echo $row['a3'];?></td>
			<td width="250px "><?php echo $row['g3'];?></td>
		</tr>
		<tr>			
			<td width="250px "><b><i>Gap if any</i></b></td>					
			<td width="250px "><?php echo $row['s4'];?></td>
			<td width="250px "><?php echo $row['b4'];?></td>
			<td width="250px "><?php echo $row['p4'];?></td>			
			<td width="250px "><?php echo $row['a4'];?></td>
			<td width="250px "><?php echo $row['g5'];?></td> </tr>
		<tr>			
			<td width="250px "><b><i>Other's</i></b></td>																	
			<td width="250px "><?php echo $row['s5'];?></td>
			<td width="250px "><?php echo $row['b5'];?></td>
			<td width="250px "><?php echo $row['p5'];?></td>			
			<td width="250px "><?php echo $row['a5'];?></td>
			<td width="250px "><?php echo $row['g5'];?></td>
		</tr>
	</table></td></tr></table>
<table align='center' width='950' border="0" ><tr><td>
<h3 >Contact Details</h3>
 <table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Mobile no.*</i></b></td>
				<td width="250px "><?php echo $row['mno'];?></td>
				<td width="250px "><b><i>Father Mobile no.*</i></b></td>
				<td width="250px "><?php echo $row['fno'];?></td>
				<td width="250px "><b><i>Email ID *</i></b></td>
				<td width="250px "><?php echo $row['email'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Current Address*</i></b></td>
				<td width="250px "><?php echo $row['cadd'];?></td>
				<td width="250px "><b><i>Permanent Address*</i></b></td>
				<td width="250px "><?php echo $row['padd'];?></td>
				<td width="250px "><b><i>District*</i></b></td>
				<td width="250px "><?php echo $row['dis'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>State *</i></b></td>
				<td width="250px "><?php echo $row['state'];?></td>
				<td width="250px "><b><i>Pincode *</i></b></td>
				<td width="250px "><?php echo $row['pin'];?></td>
				<td width="250px "><b><i>Nation *</i></b></td>
				<td width="250px "><?php echo $row['nation'];?></td>
			</tr>
			
		</table></td></tr></table>
<table align='center' width='950' border="0" ><tr><td>		
<h3 >Bank Details</h3>
 <table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Name of Bank *</i></b></td>
				<td width="250px "><?php echo $row['bank'];?></td>
				<td width="250px "><b><i>Account holder name *</i></b></td>
				<td width="250px "><?php echo $row['holder'];?></td>
				<td width="250px "><b><i>Account no. *</i></b></td>
				<td width="250px "><?php echo $row['ano'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>bank of branch *</i></b></td>
				<td width="250px "><?php echo $row['bb'];?></td>
				<td width="250px "><b><i>IFSC code *</i></b></td>
				<td width="250px "><?php echo $row['ifsc'];?></td>
				<td width="250px "><b><i>Address *</i></b></td>
				<td width="250px "><?php echo $row['badd'];?></td>
			</tr>
			
		</table>			
			<h3 >Scan Documents</h3>
					
				
 
</td></tr>
</table></td></tr></table>

</body>
</html>