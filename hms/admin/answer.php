<meta charset="utf-8">
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');

$did=intval($_GET['id']);// get doctor id
if(isset($_POST['submit']))
{
	$docspecialization=$_POST['ans'];

$sql=mysqli_query($con,"Update room set adminans='$docspecialization' where id='$did'");
if($sql)
{
$msg="تم الرد بنجاح";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>مستشفى</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>


<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#docemail").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle"></h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>الادارة</span>
									</li>
									<li class="active">
										<span>الرد</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title" align="right"><b>رد الادارة</b></h5>
												</div>
												<div class="panel-body">
									<?php
									$id=$_GET['id']; 
									?>
													<form action="answer.php" method="post">
<div id="ac" dir="rtl">
<span> </span><input type="hidden" class="form-control" value="<?php echo $id ?>" name="id" placeholder="" readonly><br>
<span> </span><textarea rows="5" type="number" class="form-control" name="ans"  placeholder="" > </textarea><br>

<!-- <span> </span><input type="number" class="form-control" name="typebay" placeholder="نوع الدفع" ><br>
<span> </span><input type="amount" id="txt1" class="form-control" name="amount"  Required placeholder="المبلغ"><br>
<span> </span><input type="card_no" id="txt1" class="form-control" name="card_no"  Required placeholder="الرقم"><br> --> 

<button class="btn btn-success btn-block btn-large" class="btn" name="save2"><i class="icon icon-save icon-large"></i>ارسال الرد</button>
<button type="reset"  class="btn btn-block btn-large" name="reset"><i class="icon icon-save icon-large"></i> مسح</button>

<div style="float:right; margin-right:10px;">

</div>
</div>
</form>

		<a class="close" href="#" align="right">&times;</a>

	</div>
</div>
                <h1></h1>
             

 </div>
  <?php
  

							  $conn = new mysqli('localhost', 'root', '', 'hms');
				 if(isset($_POST['save2']))
{
	$nn=$_POST['id'];
	$docspecialization=$_POST['ans'];
	$sql= "UPDATE `hms`.`room` SET `adminans` = '$docspecialization' WHERE `room`.`id` ='$nn'" ;
if($sql)
{
    echo "<script> alert('تم ارسال الرد'); </script>";
}
else
{
    echo "<script> alert('خطأ الرجاء المحاولة مرة اخرى'); </script>";
}

    $result = mysqli_query($conn,$sql);
	
	
	
}

?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
