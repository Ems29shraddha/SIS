<html>
<head>
<title>recipt</title>
</head>
<body>

<table border='' width='1000' align='center'>
<tr><td>

<h1  style="color:  blue;" align="center"><i><b><u>Government Polytechnic College Balaghat (M.P) </U></b></i></h1>
<h2 style="color: brown" align="center">ADMISSION FORM</h2>

<table align='center' width='950' border="0" ><tr><td>
	<h3 ><u>Admission Details </u></h3>
	<form name="form" method="post"  enctype='multipart/form-data'>
	<table >
	<tbody>
	<tr><td> <?php echo $_SESSION['Apply'];?></td></tr>
			<tr width="1200px" >
				<td width="250px "><b><i>Enrollment No. *</i></b></td>
				<td width="250px "> <?php echo $_SESSION['Roll'];?></td>
				<td width="250px "><b><i>Branch *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Br2'];?> </td>
				<td width="250px "> <b><i>Date of admission *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Date1'];?> </td>
			</tr>
			<tr>
				<td width="250px "><b><i>ppt marks *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Ppt'];?> </td>
				<td width="250px "><b><i>Name of Previous exam passed *</i></b></td>
				<td width="250px "><?php echo $_SESSION['R1'];?> </td>
				<td width="250px "><b><i>Subject</i></b></td>
				<td width="250px "><?php echo $_SESSION['R2'];?> </td>
			</tr>
																			
	</table></td></tr></table>
	<br>
	<table align='center' width='950' border="0" ><tr><td>
	
	<h3 >Personal Details</h3>
 <table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Student First name *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Fname'];?></td>
				<td width="250px "><b><i>Middle Name</i></b></td>
				<td width="250px "><?php echo $_SESSION['Mname'];?></td>
				<td width="250px "><b><i>Last Name *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Lname'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Father Name *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Father_name'];?></td>
				<td width="250px "><b><i>Father's Occupation *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Occ1'];?></td>
				<td width="250px "><b><i>Annual Income *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Income1'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Mother Name *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Mother_name'];?></td>
				<td width="250px "><b><i>Mother's Occupation *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Occ2'];?></td>
				<td width="250px "><b><i>Annual Income *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Income2'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>DOB *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Dob'];?></td>
				<td width="250px "><b><i>Aadhar no.*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Aadhar'];?></td>
				<td width="250px "><b><i>Religion *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Religion'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Gender *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Gender'];?></td>
				<td width="250px "><b><i>Category *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Cat'];?></td>
				<td width="250px "><b><i>Class *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Class'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Are you a person with disability </i></b></td>
				<td width="250px "><?php echo $_SESSION['Disable'];?>
					</td>
				<td width="250px "><b><i>Type of disability</i></b></td>
				<td width="250px "><?php echo $_SESSION['Dtype'];?></td>
				<td width="250px "><b><i>Disability persent</i></b></td>
				<td width="250px ">	<?php echo $_SESSION['Dper'];?>			</td>
			</tr>
																			
	</table></td></tr></table>
		<br>
		<table align='center' width='950' border="0" ><tr><td>
		<h3 >Academic Details</h3>
	<table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Institute *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Ins'];?></td>
				<td width="250px "><b><i>Course *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Course'];?></td>
				<td width="250px "><b><i>Branch *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Br2'];?></td>
				</td>
			</tr>
			<tr>
				<td width="250px "><b><i>Year *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Yar'];?></td>
				<td width="250px "><b><i>Semster*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Sem'];?></td>
					<td width="250px "><b><i>Status*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Status'];?> 
					
					</td>
					
					</tr><tr>
				<td width="250px "><b><i>Hostel Admission*</i></b></td>
				<td  width="250px "><?php echo $_SESSION['R6'];?>
					</td>
			</tr>
																			
	</table></td></tr></table><br>
	<table align='center' width='950' border="0" ><tr><td>
	<h3 > previous semster result</h3>
		<table >
		<tr>																		
			<td width="25px "><b><i>1</i></b></td>
			<td width="250px "><b><i>I sem/1st year</i></b></td>
			<td width="250px "><?php echo $_SESSION['Result1'];?></td>
			<td width="250px "><?php echo $_SESSION['F_sub1'];?></td>
			<td width="250px "><?php echo $_SESSION['Sgpa1'];?></td>	
			<td width="250px "><?php echo $_SESSION['Cgpa1'];?></td>
		</tr>
		<tr>			
			<td width="25px "><b><i>2</i></b></td>	
			<td width="250px "><b><i>II sem/1st year</i></b></td>	
			<td width="250px "><?php echo $_SESSION['Result2'];?></td>
			<td width="250px "><?php echo $_SESSION['F_sub2'];?></td>
			<td width="250px "><?php echo $_SESSION['Sgpa2'];?></td>	
			<td width="250px "><?php echo $_SESSION['Cgpa2'];?></td>
		</tr>			
		<tr>																		
			<td width="25px "><b><i>3</td>																	
			<td width="250px "><b><i>III sem/2nd year</i></b></td>	
			<td width="250px "><?php echo $_SESSION['Result3'];?></td>
			<td width="250px "><?php echo $_SESSION['F_sub3'];?></td>
			<td width="250px "><?php echo $_SESSION['Sgpa3'];?></td>	
			<td width="250px "><?php echo $_SESSION['Cgpa3'];?></td>
		</tr>
		<tr>			
			<td width="25px "><b><i>4</i></b></td>		
			<td width="250px "><b><i>IV sem/2nd year</i></b></td>
			<td width="250px "><?php echo $_SESSION['Result4'];?></td>
			<td width="250px "><?php echo $_SESSION['F_sub4'];?></td>
			<td width="250px "><?php echo $_SESSION['Sgpa4'];?></td>	
			<td width="250px "><?php echo $_SESSION['Cgpa4'];?></td></tr>
		<tr>			
			<td width="25px "><b><i>5</i></b></td>																	
			<td width="250px "><b><i>V sem/final year</i></b></td>
			<td width="250px "><?php echo $_SESSION['Result5'];?></td>
			<td width="250px "><?php echo $_SESSION['F_sub5'];?></td>
			<td width="250px "><?php echo $_SESSION['Sgpa5'];?></td>	
			<td width="250px "><?php echo $_SESSION['Cgpa5'];?></td>
		</tr>
		<tr>			
			<td width="25px "><b><i>6</i></b></td>
			<td width="250px "><b><i>VI sem/final year</i></b></td>
			<td width="250px "><?php echo $_SESSION['Result6'];?></td>
			<td width="250px "><?php echo $_SESSION['F_sub6'];?></td>
			<td width="250px "><?php echo $_SESSION['Sgpa6'];?></td>	
			<td width="250px "><?php echo $_SESSION['Cgpa6'];?></td>
		</tr>
	</table></td></tr></table><br>
	<table align='center' width='950' border="0" ><tr><td>
		<h3 class="w3_inner_tittle">Details of previous Qualification</h3>
		<table id="table-two-axis" class="two-axis">
		<tr>																		
			<td width="250px "><b><i>10th *</i></b></td>
			<td width="250px "><?php echo $_SESSION['S1'];?></td>
			<td width="250px "><?php echo $_SESSION['B1'];?></td>
			<td width="250px "><?php echo $_SESSION['P1'];?></td>			
			<td width="250px "><?php echo $_SESSION['A1'];?></td>
			<td width="250px "><?php echo $_SESSION['G1'];?></td>
		</tr>
		<tr>			
			<td width="250px "><b><i>12th</i></b></td>
			<td width="250px "><?php echo $_SESSION['S2'];?></td>
			<td width="250px "><?php echo $_SESSION['B2'];?></td>
			<td width="250px "><?php echo $_SESSION['P2'];?></td>			
			<td width="250px "><?php echo $_SESSION['A2'];?></td>
			<td width="250px "><?php echo $_SESSION['G2'];?></td>
		</tr>			
		<tr>																		
			<td width="250px "><b><i>Graduation</i></b></td>
			<td width="250px "><?php echo $_SESSION['S3'];?></td>
			<td width="250px "><?php echo $_SESSION['B3'];?></td>
			<td width="250px "><?php echo $_SESSION['P3'];?></td>			
			<td width="250px "><?php echo $_SESSION['A3'];?></td>
			<td width="250px "><?php echo $_SESSION['G3'];?></td>
		</tr>
		<tr>			
			<td width="250px "><b><i>Gap if any</i></b></td>					
			<td width="250px "><?php echo $_SESSION['S4'];?></td>
			<td width="250px "><?php echo $_SESSION['B4'];?></td>
			<td width="250px "><?php echo $_SESSION['P4'];?></td>			
			<td width="250px "><?php echo $_SESSION['A4'];?></td>
			<td width="250px "><?php echo $_SESSION['G4'];?></td> </tr>
		<tr>			
			<td width="250px "><b><i>Other's</i></b></td>																	
			<td width="250px "><?php echo $_SESSION['S5'];?></td>
			<td width="250px "><?php echo $_SESSION['B5'];?></td>
			<td width="250px "><?php echo $_SESSION['P5'];?></td>			
			<td width="250px "><?php echo $_SESSION['A5'];?></td>
			<td width="250px "><?php echo $_SESSION['G5'];?></td>
		</tr>
	</table></td></tr></table>
<table align='center' width='950' border="0" ><tr><td>
<h3 >Contact Details</h3>
 <table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Mobile no.*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Mno'];?></td>
				<td width="250px "><b><i>Father Mobile no.*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Fno'];?></td>
				<td width="250px "><b><i>Email ID *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Email'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>Current Address*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Cadd'];?></td>
				<td width="250px "><b><i>Permanent Address*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Padd'];?></td>
				<td width="250px "><b><i>District*</i></b></td>
				<td width="250px "><?php echo $_SESSION['Dis'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>State *</i></b></td>
				<td width="250px "><?php echo $_SESSION['State'];?></td>
				<td width="250px "><b><i>Pincode *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Pin'];?></td>
				<td width="250px "><b><i>Nation *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Nation'];?></td>
			</tr>
			
		</table></td></tr></table>
<table align='center' width='950' border="0" ><tr><td>		
<h3 >Bank Details</h3>
 <table >
										<tbody>
			<tr>
				<td width="250px "><b><i>Name of Bank *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Bank'];?></td>
				<td width="250px "><b><i>Account holder name *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Hold'];?></td>
				<td width="250px "><b><i>Account no. *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Ano'];?></td>
			</tr>
			<tr>
				<td width="250px "><b><i>bank of branch *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Bob'];?></td>
				<td width="250px "><b><i>IFSC code *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Ifsc'];?></td>
				<td width="250px "><b><i>Address *</i></b></td>
				<td width="250px "><?php echo $_SESSION['Add'];?></td>
			</tr>
			
		</table>			
			<h3 ><a href='document.php'>Scan Documents</a></h3>
					
				
 
</td></tr>
</table></td></tr></table>

</body>
</html>