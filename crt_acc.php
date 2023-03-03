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

					
<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Welcome </h2>
									<!-- tables -->
									
						<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									
		
		<a href='profile.php'><img src="home.jpg" alt="HTML5 Icon" style="width:50px;height:50px;" align='right'></a>
									  <h3 class="w3_inner_tittle">Created another account</h3>
									  <form name="form" method="post" action="crt_acc_in.php" enctype='multipart/form-data'>
									  <div class="my-form">
							  
	<br>
	
 <table id="table-two-axis" class="two-axis">
										<tbody>
			<tr>
				<td>User id</td>
				<td><input type="text" id="id" name="id" required></td>
				<td>user name</td>
				<td><input type="text" id="user" name="user" ></td>
				</tr><tr>
				<td>password</td>
				<td><input type="text" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]){8,}" required></td> 
				<td>DOB</td>
				<td><input type="text" id="dob" name="dob" required placeholder='yyyy/mm/dd'></td></tr><tr>
			
				<td>Email</td>
				<td><input type="text" id="email" name="email" required></td>
				
				<td>mobile</td>
				<td><input type="text" id="mob" name="mob" required ></td>
				</tr><tr>
				<td>nic name</td>
				<td><input type="text" id="nic" name="nic" required></td>
			</tr>
			
																	
	</table>
		<br>
                 
         <td><button type="submit" class="btn btn-default">Submit</button></td>
		 
		 
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
	 <p>ɠ2017 GPCB. All Rights Reserved | Design by  <a href="http://octalitservices.com/" target="_blank">shraddha & team </a> </p>
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