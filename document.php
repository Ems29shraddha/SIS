<?php

session_start();

if(!isset($_SESSION['Id']))
{
	
?>
	<script language="javascript" type="text/javascript">
	window.location="../login.html?msg=expire";
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

	<div class="container">
				<div class="row">
					<div class="col-md-6">				
<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Uploades Previous Doc </h2>
									<!-- tables -->
									
						<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
	<form name="form1" method="post" action="" enctype='multipart/form-data'>
		<table><tr><td width="250px "></td ><td width="250px "></td><td width="250px ">Enrollment No</td><td width="250px "></td>
		<td>
		<input type="text" id="en" name="en" align='right' required>
		</td>
		<td><input type='submit' id='t1' name='t1' value='print'></td>
		
		</td></tr></table>
		</form>
									  <h3 class="w3_inner_tittle"></h3>
									  <table>
									  <tr>
									  <th>Document Name</th><th>Download</th>
									  </tr>
									  
			<?php
			if(isset($_POST['t1']))
			{
$enrol=$_POST['en'];
$con=mysql_connect("localhost","root","");
		mysql_select_db("stu_mang",$con);
		$sql="select * from student where enrol='$enrol'";
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
	     
		 $d1=$row['d1'];
         $d2=$row['d2'];
$myarray=explode(',',$d1);	
$array=explode(',',$d2);
$num=count($myarray);

for($i=0; $i<$num; $i++)
{
echo "<tr><td>$myarray[$i]</td><td><a href=\"doc/$array[$i]\" target=\_blank\">Download</a></td></tr>";
}
			}
?>	
</table>
					
		
									</div>
									                            
						</div>	

</div></div>
<div class="col-md-6">
<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Upload Documents </h2>
									<!-- tables -->
									
						<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
		<form name="f2" id="f2" method="post" action="" enctype='multipart/form-data'>
		<table>
		<tr><td width="250px ">Enrollment No</td>
		<td>
		<input type="text" id="en" name="en" align='right' required>
		</td>
		</tr>
		<tr><td width="250px ">Doc Name</td>
		<td>
		<input type="text" id="doc" name="doc" align='right'>
		</td>
		</tr>
		<tr><td>Upload Document</td>
		<td>
		<input type="file" id="file" name="file" align='right'>
		</td></tr>
		<tr>
		<td><p style="color:red;">If You want to Insert Record fill both of fields and Click here:-</p></td>
		<td><input type='submit' id='t2' name='t2' value='Insert Doc'></td>
		</tr>
		<tr>
		<td><p style="color:red;">If You want to Search Record enter only Enrollment and click here:-</p></td>
		<td><input type='submit' id='t3' name='t3' value='Search Doc'></td>
		</tr></table>
		</form>
		<?php
			if(isset($_POST['t2']))
			{
$enrol=$_POST['en'];
$doc=$_POST['doc'];
$fileupload=$_FILES['file']['name'];
date_default_timezone_set("Asia/Kolkata");
    $apply=date("Y-m-d");
	  move_uploaded_file($_FILES["file"]["tmp_name"],"upload/"  .$_FILES["file"]["name"]);
	// Establish Connection with MYSQL
	$con = @mysql_connect ("localhost","root","");
	mysql_select_db("stu_mang", $con);
	// Specify the query to Insert Record
	$sql = "insert into doc(enrol,name,doc,apply) values('".$enrol."','".$doc."','".$fileupload."','".$apply."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Doc Uploaded Succesfully");window.location=\'document.php\';</script>';

			}
			?>
			
									</div>
						</div>
						<table>
									  <tr>
									  <th>Document Name</th><th>Date</th><th>Download</th>
									  </tr>
									  
			<?php
			if(isset($_POST['t3']))
			{
$enrol=$_POST['en'];
$con=mysql_connect("localhost","root","");
		mysql_select_db("stu_mang",$con);
		$sql="select * from doc where enrol='$enrol'";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
			?>
			<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['apply'];?></td>
		    <td><a href="upload/<?php echo $row['doc'];?>" target="_blanck">Download</a></td>
			</tr>
			<?php
		}
	     
			}
?>	
</table>
</div>
</div>
</div></div>

						
					
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