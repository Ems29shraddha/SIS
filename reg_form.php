<?php

session_start();

if(!isset($_SESSION['Id']))
{
	
?>
	<script language="javascript" type="text/javascript">
	window.location="../profile.php";
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
					    <h5 align='right' class="w3_inner_tittle"><b>(NOTE:- those content are required who have * symbol)</b> </h5>
									<!-- tables -->
									
						<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									
		</p>
		<form name="form1" method="post" action="print_in.php" enctype='multipart/form-data'>
		<table><tr><td width="250px "></td ><td width="250px "></td><td width="250px "></td><td width="250px "></td>
		<td>
		<input type="text" id="enrol" name="enrol" align='right' required>
		</td>
		<td><input type='submit' id='t1' name='t1' value='print'></td>
		
		</td></tr></table>
		</form>
		
		
									  <h3 class="w3_inner_tittle">Admission Details </h3>
		
									  <form name="form" method="post" action="stu_reg_in.php" enctype='multipart/form-data'>
									  <div class="my-form">
									   <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Enrollment No. *</i></b></td>
				<td><input type="text" id="enrol" name="enrol" required></td>
				<td><b><i>Branch *</i></b></td>
				<td><select name='br1' id='br1'>
						<option value="">Select</option>
						<option value="civil engineering">civil engineering</option>
						<option value="machenical engineering">machenical engineering</option>
						<option value="electrial engineering">electrial engineering</option>
						<option value="computer science & engineering">computer science & engineering</option>
						</select></td>
				<td><b><i>Date of admission *</i></b></td>
				<td><input type="text" id="date1" name="date1" placeholder='yyyy/mm/dd' ></td>
			</tr>
			<tr>
				<td><b><i>ppt marks *</i></b></td>
				<td><input type="text" id="ppt" name="ppt" ></td>
				<td><b><i>Name of Previous exam passed *</i></b></td>
				<td><input type="radio" value="10th" name="r1" id="r1"/>10th
					<input type="radio" value="12th" name="r1" id="r1"/>12th 
					<input type="radio" value="Graduation" name="r1" id="r1"/>Graduation</td>
				<td><b><i>Subject</i></b></td>
				<td><input type="radio" value="Maths" name="r2" id="r2"/>Maths
					<input type="radio" value="Bio" name="r2" id="r2"/>Bio 
					<input type="radio" value="AG" name="r2" id="r2"/>AG
					<input type="radio" value="COM" name="r2" id="r2"/>COM
					<input type="radio" value="Arts" name="r2" id="r2"/>Arts
					<input type="radio" value="Other" name="r2" id="r2"/>Other</td>
			</tr>
																			
	</table>
	<br>
	<h3 class="w3_inner_tittle">Personal Details</h3>
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Student First name *</i></b></td>
				<td><input type="text" id="fname" name="fname" required></td>
				<td><b><i>Middle Name</i></b></td>
				<td><input type="text" id="mname" name="mname" ></td>
				<td><b><i>Last Name *</i></b></td>
				<td><input type="date" id="lname" name="lname" required></td>
			</tr>
			<tr>
				<td><b><i>Father Name *</i></b></td>
				<td><input type="text" id="father_name" name="father_name" required></td>
				<td><b><i>Father's Occupation *</i></b></td>
				<td><input type="text" id="occ1" name="occ1" ></td>
				<td><b><i>Annual Income *</i></b></td>
				<td><input type="text" id="income1" name="income1" ></td>
			</tr>
			<tr>
				<td><b><i>Mother Name *</i></b></td>
				<td><input type="text" id="mother_name" name="mother_name" required></td>
				<td><b><i>Mother's Occupation *</i></b></td>
				<td><input type="text" id="occ2" name="occ2" ></td>
				<td><b><i>Annual Income *</i></b></td>
				<td><input type="text" id="income2" name="income2" ></td>
			</tr>
			<tr>
				<td><b><i>DOB *</i></b></td>
				<td><input type="text" id="dob" name="dob" placeholder='yyyy/mm/dd'></td>
				<td><b><i>Aadhar no.*</i></b></td>
				<td><input type="text" id="aadhar" name="aadhar" ></td>
				<td><b><i>Religion *</i></b></td>
				<td><input type="text" id="religion" name="religion" ></td>
			</tr>
			<tr>
				<td><b><i>Gender *</i></b></td>
				<td><select id="gender" name="gender">
					<option value="">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</select></td>
				<td><b><i>Category *</i></b></td>
				<td><select id="cat" name="cat">
					<option value="">Select</option>
					<option value="ST">ST</option>
					<option value="SC">SC</option>
					<option value="OBC">OBC</option>
					<option value="GENERAL">GENERAL</option>
					<option value="OTHER">OTHER</option>
					</select></td>
				<td><b><i>Class *</i></b></td>
				<td><select id="class" name="class">
					<option value="">Select</option>
					<option value="FF">FF</option>
					<option value="Sainik">Sainik</option>
					<option value="Tech">Tech</option>
					<option value="HC">HC</option>
					<option value="None">None</option>
					</select></td>
			</tr>
			<tr>
				<td><b><i>Are you a person with disability </i></b></td>
				<td>
					<input type="radio" value="Yes" name="disable" id="disable"/>Yes
					<input type="radio" value="No" name="disable" id="disable"/>No
					</select></td>
				<td><b><i>Type of disability</i></b></td>
				<td><select id="dtype" name="dtype">
					<option value="">Select</option>
					<option value="Hearing impaired">Hearing impaired</option>
					<option value="Visual impaired<">Visual impaired</option>
					<option value="Orthopaedically challenged">Orthopaedically challenged</option>
					</select></td>
				<td><b><i>Disability persent</i></b></td>
				<td><input type="text" id="dper" name="dper" placeholder="persent">					</td>
			</tr>
																			
	</table>
		<br>
		<h3 class="w3_inner_tittle">Academic Details</h3>
	<table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Institute *</i></b></td>
				<td><input type="text" id="ins" name="ins" ></td>
				<td><b><i>Course *</i></b></td>
				<td><input type="text" id="course" name="course" ></td>
				<td><b><i>Branch *</i></b></td>
				<td><select name='br2' id='br2'>
						<option value="">Select</option>
						<option value="civil engineering">civil engineering</option>
						<option value="machenical engineering">machenical engineering</option>
						<option value="electrial engineering">electrial engineering</option>
						<option value="computer science & engineering">computer science & engineering</option>
						</select></td>
				</td>
			</tr>
			<tr>
				<td><b><i>Year *</i></b></td>
				<td><select name='yar' id='yar'>
					<option value="">Select</option>
					<option value="first">first</option>
					<option value="second">second</option>
					<option value="final">final</option>
					</select></td>
				<td><b><i>Semster*</i></b></td>
				<td><select name='sem' id='sem'>
					<option value="">Select</option>
					<option value="I">I </option>
					<option value="II">II</option>
					<option value="III">III</option>
					<option value="IV">IV</option> 
					<option value="V">V</option>
					<option value="VI">VI</option>
					</select></td>
					<td><b><i>Status*</i></b></td>
				<td><input type="radio" value="Regular" name="status" id="status"/>Regular 
					<input type="radio" value="Ex" name="status" id="status"/>Ex
					</td>
					
					</tr><tr>
				<td><b><i>Hostel Admission*</i></b></td>
				<td colspan='5'><input type="radio" value="Yes" name="r6" id="r6"/>Yes 
					<input type="radio" value="No" name="r6" id="r6"/>No
					</td>
			</tr>
																			
	</table><br>
	<h3 class="w3_inner_tittle"> previous semster result</h3>
		<table id="table-two-axis" class="two-axis">
		<tr>																		
			<td><b><i>1</i></b></td>
			<td><b><i>I sem/1st year</i></b></td>
			<td><input type="text" id="result1" name="result1" placeholder="result" size="30" ></td>
			<td><textarea id="f_sub1" name="f_sub1" placeholder='fail in subject'></textarea></td>
			<td><input type="text" id="sgpa1" name="sgpa1" placeholder="sgpa" size="12" ></td>	
			<td><input type="text" id="cgpa1" name="cgpa1" placeholder="cgpa" size="8" ></td>
		</tr>
		<tr>			
			<td><b><i>2</i></b></td>	
			<td><b><i>II sem/1st year</i></b></td>	
			<td><input type="text" id="result2" name="result2" placeholder="result" size="30" ></td>
			<td><textarea id="f_sub2" name="f_sub2" placeholder='fail in subject'></textarea></td>
			<td><input type="text" id="sgpa2" name="sgpa2" placeholder="sgpa " size="12"></td> <td><input type="text" id="cgpa2" name="cgpa2" placeholder="cgpa" size="8" ></td>	
		</tr>			
		<tr>																		
			<td><b><i>3</td>																	
			<td><b><i>III sem/2nd year</i></b></td>	
			<td><input type="text" id="result3" name="result3" placeholder="result" size="30" ></td>
			<td><textarea id="f_sub3" name="f_sub3" placeholder='fail in subject'></textarea></td>
			<td><input type="text" id="sgpa3" name="sgpa3" placeholder="sgpa " size="12"></td>	<td><input type="text" id="cgpa3" name="cgpa3" placeholder="cgpa" size="8" ></td> 
		</tr>
		<tr>			
			<td><b><i>4</i></b></td>		
			<td><b><i>IV sem/2nd year</i></b></td>
			<td><input type="text" id="result4" name="result4" placeholder="result" size="30" ></td>
			<td><textarea id="f_sub4" name="f_sub4" placeholder='fail in subject'></textarea></td>
			<td><input type="text" id="sgpa4" name="sgpa4" placeholder=" sgpa" size="12"></td>	<td><input type="text" id="cgpa4" name="cgpa4" placeholder="cgpa" size="8" ></td></tr>
		<tr>			
			<td><b><i>5</i></b></td>																	
			<td><b><i>V sem/final year</i></b></td>
			<td><input type="text" id="result5" name="result5" placeholder="result" size="30" ></td>
			<td><textarea id="f_sub5" name="f_sub5" placeholder='fail in subject'></textarea></td>
			<td><input type="text" id="sgpa5" name="sgpa5" placeholder=" sgpa" size="12"></td>	<td><input type="text" id="cgpa5" name="cgpa5" placeholder="cgpa" size="8" ></td> 
		</tr>
		<tr>			
			<td><b><i>6</i></b></td>
			<td><b><i>VI sem/final year</i></b></td>
			<td><input type="text" id="result6" name="result6" placeholder="result" size="30" ></td>
			<td><textarea id="f_sub6" name="f_sub6" placeholder='fail in subject'></textarea></td>
			<td><input type="text" id="sgpa6" name="sgpa6" placeholder="sgpa " size="12"></td>	<td><input type="text" id="cgpa6" name="cgpa6" placeholder="cgpa" size="8" ></td> 
		</tr>
	</table><br>
		<h3 class="w3_inner_tittle">Details of previous Qualification</h3>
		<table id="table-two-axis" class="two-axis">
		<tr>																		
			<td><b><i>10th *</i></b></td>
			<td><input type="text" id="s1" name="s1" placeholder="Subject" size="15" ></td>
			<td><input type="text" id="b1" name="b1" placeholder="Board" size="30" ></td>
			<td><input type="text" id="p1" name="p1" placeholder="Passing Year" size="12" ></td>			
			<td><input type="text" id="a1" name="a1" placeholder="Percentage" size="8" ></td>																	
			<td><input type="text" id="g1" name="g1" placeholder="Grade" size="8" ></td>
		</tr>
		<tr>			
			<td><b><i>12th</i></b></td>
			<td><input type="text" id="s2" name="s2" placeholder="Subject" size="15" ></td>	
			<td><input type="text" id="b2" name="b2" placeholder="Board" size="30" ></td>
			<td><input type="text" id="p2" name="p2" placeholder="Passing Year" size="12"></td> <td><input type="text" id="a2" name="a2" placeholder="Percentage" size="8" ></td>	<td><input type="text" id="g2" name="g2" placeholder="Grade" size="8" ></td>
		</tr>			
		<tr>																		
			<td><b><i>Graduation</i></b></td>
			<td><input type="text" id="s3" name="s3" placeholder="Subject" size="15" ></td>	
			<td><input type="text" id="b3" name="b3" placeholder="Board" size="30" ></td>
			<td><input type="text" id="p3" name="p3" placeholder="Passing Year" size="12"></td>	<td><input type="text" id="a3" name="a3" placeholder="Percentage" size="8" ></td> <td><input type="text" id="g3" name="g3" placeholder="Grade" size="8" ></td>
		</tr>
		<tr>			
			<td><b><i>Gap if any</i></b></td>					
			<td><input type="text" id="s4" name="s4" placeholder="Subject" size="15" ></td>
			<td><input type="text" id="b4" name="b4" placeholder="Board" size="30" ></td>
			<td><input type="text" id="p4" name="p4" placeholder="Passing Year" size="12"></td>	<td><input type="text" id="a4" name="a4" placeholder="Percentage" size="8" ></td><td><input type="text" id="g4" name="g4" placeholder="Grade" size="8" ></td> </tr>
		<tr>			
			<td><b><i>Other's</i></b></td>																	
			<td><input type="text" id="s5" name="s5" placeholder="Subject" size="15" ></td>
			<td><input type="text" id="b5" name="b5" placeholder="Board" size="30" ></td>
			<td><input type="text" id="p5" name="p5" placeholder="Passing Year" size="12"></td>	<td><input type="text" id="a5" name="a5" placeholder="Percentage" size="8" ></td> <td><input type="text" id="g5" name="g5" placeholder="Grade" size="8" ></td>
		</tr>
	</table>

<h3 class="w3_inner_tittle">Contact Details</h3>
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Mobile no.*</i></b></td>
				<td><input type="text" id="mno" name="mno" required></td>
				<td><b><i>Father Mobile no.*</i></b></td>
				<td><input type="text" id="fno" name="fno" ></td>
				<td><b><i>Email ID *</i></b></td>
				<td><input type="text" id="email" name="email" placeholder=''></td>
			</tr>
			<tr>
				<td><b><i>Current Address*</i></b></td>
				<td><textarea id="cadd" name="cadd"></textarea></td>
				<td><b><i>Permanent Address*</i></b></td>
				<td><textarea id="padd" name="padd"></textarea></td>
				<td><b><i>District*</i></b></td>
				<td><input type="text" id="dis" name="dis" ></td>
			</tr>
			<tr>
				<td><b><i>State *</i></b></td>
				<td><input type="text" id="state" name="state" ></td>
				<td><b><i>Pincode *</i></b></td>
				<td><input type="text" id="pin" name="pin" /></td>
				<td><b><i>Nation *</i></b></td>
				<td><input type="text" id="nation" name="nation" placeholder='india'  /></td>
			</tr>
			
		</table>	
<h3 class="w3_inner_tittle">Bank Details</h3>
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td><b><i>Name of Bank *</i></b></td>
				<td><input type="text" id="bank" name="bank" /></td>
				<td><b><i>Account holder name *</i></b></td>
				<td><input type="text" id="hold" name="hold" /></td>
				<td><b><i>Account no. *</i></b></td>
				<td><input type="date" id="ano" name="ano" /></td>
			</tr>
			<tr>
				<td><b><i>bank of branch *</i></b></td>
				<td><input type="text" id="bob" name="bob" /></td>
				<td><b><i>IFSC code *</i></b></td>
				<td><input type="text" id="ifsc" name="ifsc" /></td>
				<td><b><i>Address *</i></b></td>
				<td><textarea id="add" name="add"></textarea></td>
			</tr>
			
		</table>			
			<h3 class="w3_inner_tittle"><a href='document.php'>Scan Documents</a></h3>
					<table id="table-two-axis" class="two-axis">
							<tr>
				<td><b><i>Student's Photo *</i></b></td>
				<td><input id="fileupload" name="fileupload" type="file"  multiple="multiple" /></td>
				<td><div id="dvPreview"><img src="images/upload.png" width="130" height="140"></div></td>
				<td><b><i>Signature *</i></b></td>
				<td><input id="fileupload1" name="fileupload1" type="file"  multiple="multiple" /></td>
				<td><div id="dvPreview1"><img src="images/sign.png" width="150" height="60"></div></td>
				</tr>
				</table>
				<h3 class="w3_inner_tittle"><b><i>UPLOAD DOCUMENTS</i></b></h3>
																	
                 <p class="text-t">
               
                    <label for="box1"><span class="t-number">1&nbsp;</span>&nbsp;DOCUMENTS NAME</label>
                    <input type="text" name="d1[]" placeholder="DOC" id="d1" />
                    
		            <label for="box1"><b>UPLOAD</b></label>
					<input type="file" name="d2[]"  id="d2" />
					<a class="add-t" href="#"><b>Add More</b></a>

                </p>
                               
        <button type="submit" class="btn btn-default">Submit</button>																
																				</form>
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
	 <p>© 2017 GPCB. All Rights Reserved | Design by  <a href="http://octalitservices.com/" target="_blank">octalitservices</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('.my-form .add-t').click(function(){
            var p = $('.text-t').length + 1;
            if( 10 < p ) {
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