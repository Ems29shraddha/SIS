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
		  <?php include 'nav.php';?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Welcome <?php echo $_SESSION['User'];?></h2>
									<!-- tables -->
									
						<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									  <h3 class="w3_inner_tittle">Student Information</h3>
									 
									 <form name="f1" id="f1" method="post" action="">
									 <table id="table-two-axis" class="two-axis">
									 <tr>
									
									<td> <input type="submit" id="s1" name="s1" value='student list'></td>
									 </tr>
									 </table>
				                   </form>
									  <div class="my-form">
									   <table id="table-two-axis" class="two-axis">
										<tbody>
										                                        <tr>
						<th>Enrollment No.</th>	
						<th>Student Name</th>
						<th>Branch/ Semester</th>	
						<th>DOB</th>
						<th>Admission year</th>
						<th>contact no.</th>
						<th>Update</th>
						<th>print</th>
													
						
				</tr>
		<?php
		if(isset($_POST['s1']))
		{
			
		$con=mysql_connect("localhost","root","");
		mysql_select_db("stu_mang",$con);
		$sql="select * from student ";
		$result=mysql_query($sql,$con);
		while($row=mysql_fetch_array($result))
		{
			$roll=$row['enrol'];
		?>
			<tr>
				
				<td><?php echo $roll;?></td>
				<td><?php echo $row['fname'];?>&nbsp;<?php echo $row['mname'];?>&nbsp;<?php echo $row['lname'];?></td>
				<td><?php echo $row['br2'];?> &nbsp; <?php echo $row['sem'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['date1'];?></td>
				<td><?php echo $row['mno'];?></td>
				
		  
		  
		
		  <td><a href="update.php?roll=<?php echo $row['enrol'];?>"><b>UPDATE</b></a></td>
		  <td><a href="print_in.php?roll=<?php echo $row['enrol'];?>"><b>PRINT</b></a></td>
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
					</div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 GPCB. All Rights Reserved | Design by  <a href="http://octalitservices.com/" target="_blank">octalitservices</a> </p>
</div>	

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