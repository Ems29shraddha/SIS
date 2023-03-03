<?php
session_start();
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

</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  
		<div class="clearfix"></div><p onclick="print()"> <img src="print.jpg" alt="HTML5 Icon" style="width:100px;height:40px;" align='right'>
		</p>
		
		<a href='profile.php'><img src="home.jpg" alt="HTML5 Icon" style="width:50px;height:50px;" align='right'></a>		
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
							<td> <input type="submit" id="s1" name="s1" value='student list'></td>
	<div class="my-form">
				<table id="table-two-axis" class="two-axis" border='1'>
				<tbody>
					<tr>
						<th>Enrollment No.</th>	
						<th>Student Name</th>
						<th>Branch/ Semester</th>	
						<th>DOB</th>
						<th>Admission year</th>
						<th>contact no.</th>
						
												
						
					</tr>
		<?php
		if(isset($_POST['s1']))
		{
		$con=mysql_connect("localhost","root","");
		mysql_select_db("stu_mang",$con);
		$sql="select * from student where nation='india'";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
			$enrol=$row['enrol'];
		?>
			<tr>
				<td><?php echo $enrol;?></td>
				<td><?php echo $row['fname'];?>&nbsp;<?php echo $row['mname'];?>&nbsp;<?php echo $row['lname'];?></td>
				<td><?php echo $row['br2'];?> &nbsp; <?php echo $row['sem'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['date1'];?></td>
				<td><?php echo $row['mno'];?></td>
				
		  
		  
		</tr>
		<?php
		}
		}
		?>					
										</tbody>
									  </table>
									                                         
																				
      
																				</div>
									</div>
									                            
						</div>
							<!-- //tables -->
					
					<!-- //inner_content_w3_agile_info-->
				
		<!-- //inner_content-->
<!--copy rights start here-->
	

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