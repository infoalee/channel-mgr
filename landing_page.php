<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Channel Management</title>

    <link rel="shortcut icon" href="images/kbank.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="dist/css/my-style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="vendor/jquery/jquery.js"></script>
    <link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css">
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

      
  <!-- Bootstrap Core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="_controller/nav_sidebar.js"></script>
  
  <!-- Custom Theme JavaScript -->
  <script src="dist/js/sb-admin-2.js"></script>
  <script src="dist/js/jquery.session.js"></script>
  <script src='_controller/landing_page.js'></script>
  <script src="_controller/page_function.js"></script>

  
    <script>
     
      var show_dashboard = function(){
          $("#baseview").empty();
          $("#baseview").load("./_view/dashboard.php?role=<? echo $_SESSION['ROLE'];?>");  

      }
      var show_booking = function(){
          $("#baseview").empty('');
          $("#baseview").load("./_view/newtask.php");  
      }
      var show_calendar = function(){
          //$("#baseview").empty('');
          $("#baseview").load("./_view/calendar.php");  
      }
      var show_manage_booking = function(){
          $("#baseview").empty('');
          $("#baseview").load("./_view/mgr_booking.php");  
      }
      
    </script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- #wrapper -->
<div id="wrapper">
  <div class="modal-loading"><i class="fa fa-spinner fa-spin modal-loading-center" style="font-size:70px"></i></div>

<!-- Navigation -->
<nav class="nav navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
  <?
  include "nav_navhead.php";
  include "nav_navbar.php";
  include "nav_sidebar.php";
  ?>
</nav>
<!-- nav -->

    <div id="baseview"></div>

 <!-- Modal  confrim Logout -->
		 <div class="modal fade" id="logoutModal" role="dialog">
			<div class="modal-dialog modal-md">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Confrim Logout <span class="glyphicon glyphicon-question-sign"></span> </h4>

				</div>
				<div class="modal-body">
				  <p class="text-warning"><span class="glyphicon glyphicon-exclamation-sign"></span> คุณต้อการออกจากระบบ หากต้องการเข้าสู่ระบบ กรุณา Login ใหม่. Are you sure?</p>
				</div>
				<div class="modal-footer">
				  <button type="button" id="myButtonLogoutCancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
				  <button type="button" id="myButtonLogout"  class="btn btn-primary" autocomplete="off">Confirm</button>

					<script>
					  $('#myButtonLogout').on('click', function () {
							//$(this).button('complete') // button text will be "finished!"
							//alert(1)
							$(this).button('loading');
							$('#myButtonLogoutCancel').button('loading');
							$('.modal-loading').show().delay(500).queue(function(){
								window.location = './_model/func-logout.php';
							});

					  });
					</script>


				</div>
			  </div>
			</div>
		  </div>
		</div>
		 <!-- Modal  confrim Logout -->
</div>
  <!-- /#wrapper -->


</body>

</html>
