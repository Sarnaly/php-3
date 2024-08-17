<?php
require('admin_dbcon.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link start-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin_dashboard.css">
	<link rel="stylesheet" href=".css/style.css">
    <!--css link end-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	
	<link rel="shortcut icon" href="../images/site-icon.png" type="image/x-icon">

       <!-- custome css link -->
	   <link rel="stylesheet" href="./css/style.css" />
	   <link rel="stylesheet" href="./css/form.style.css" />
	   <link rel="stylesheet" href="./css/button.css" />
	   <link rel="stylesheet" href="./css/style.table.css">
	   <link rel="stylesheet" href="./css/bootstrap_modify.css">
	   <link rel="stylesheet" href="./css/admin.style.css" />
	   <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css" />
	   <link rel="stylesheet" href="./css/bootstrap.min.css">
	   <link rel="stylesheet" href="./css/buttons.dataTables.min.css">
	   <link rel="stylesheet" href="./css/style.reg.css" />

	   
	  
		
		<!-- font-awesome cdn -->
		<link rel="stylesheet" href="./fontawesome/css/all.css">
    	<link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js"></script>
    <title>Sarnaly - Dashboard</title>
</head>

<body>
<div class="main_div ">
<div class="navbar navbar-dark bg-dark ">
			<div class="logo"><a class="navbar-brand" href="#"><img src="./img/fcti-soft-brand-icon.png" alt="logo" style="width:150px;"></a></div>
			<div class="menu-content">
				<div class="main-content">
				<ul>
					<li class="notification"><a href=""><i class="fa-solid fa-bell" style="padding:5px 5px; color:#fff;"></i><span class="badge"></span></a>
						<div class="sub_menu sub_menu_click-1"> 
							
						</div>
					
					</li>
					
					
					<li class="profile_name" onclick="dropdown2()"><img style="border-radius: 50%; width=30px;  height:30px; border-radius:50%; border:1px solid #000;" src="./img/user.jpg" alt="" /> <span style="color:#fff;">Sarnaly<i style="padding-left:px; color:#fff;" class="fa-solid fa-caret-down"></i></span>
						<div class="sub_menu sub_menu_click-2"> 
							<ul>
								<li><a href="">Edit Profile</a></li>
								<li><a href="">Change Password</a></li>
								<li><a href="">Logout</a></li>
							</ul>
						</div>
					
					</li>
				</ul>
				</div>
			</div>

</div>

<div class="container-fluid" style="padding-left:0;position:relative">
	<section class="section-content">
			<div class="row d-flex">
				<div class="col-sm-12 col-md-12 col-lg-3 col-xxl-2" > 
					<nav class="sidebar card">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item">
								<a class="list-group-item dashboard" href=""><i class="fa-solid fa-dashboard" style="padding-right:7px;"></i>Dashboard</a>
							</li>
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-plus nav-icon"></i>Admission <i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="">Admission</a></li>
									<li><a class="nav-link" href="">Admission Report</a></li>

									
								</ul>
							</li>	
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-plus nav-icon"></i>Courses <i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="">Add Course</a></li>
									<li><a class="nav-link" href="">All Courses</a></li>
									
								</ul>
							</li>	
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-tie nav-icon"></i>Student Account<i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="">All Student Account List</a></li>
									<li><a class="nav-link" href="">Student Active Account</a></li>
									<li><a class="nav-link" href="">Student Inactive Account</a></li>
								</ul>
							</li>
							
								<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-user-tie nav-icon"></i> Student List<i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="">Course Wise List</a></li>
									
								</ul>
							</li>
							<li class="nav-item has-submenu">
								<a class="nav-link list-group-item" href="#"><i class="fa-solid fa-gear nav-icon"></i>Setting<i class="fa-solid fa-caret-down"></i></a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="">Edit Profile</a></li>
									<li><a class="nav-link" href="">Change Password</a></li>
									<li><a class="nav-link" href="">User List</a></li>
									<li><a class="nav-link" href="">Add User</a></li>
									<li><a class="nav-link" href="">Logo Change</a></li>
								</ul>
							</li>


						     
						</ul>
					</nav>
				</div>				
				<div class="col-sm-12 col-md-12 col-lg-9 col-xxl-10"> 
				
				</div>
			
	
			</div>
	</section>

</div>
</div>

	<script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/form.js"></script>
	<script type="text/javascript" src="./js/dashboard.js"></script>

	<!-- copy csv excel pdf -->
	<script src="../js/dataTables.buttons.min.js"></script>
	<script src="../js/jszip.min.js"></script>
	<script src="../js/pdfmake.min.js"></script>
	<script src="../js/vfs_fonts.js"></script>
	<script src="../js/buttons.html5.min.js"></script>
	<script src="../js/buttons.print.min.js"></script>
	
		<!-- copy csv excel pdf -->

	<script type="text/javascript">

$(document).ready(function() {
    $('#data_table').DataTable({
		scrollY:'1000px',
	});
	$('#data_table_report').DataTable({
		dom: 'Bfrtip',
		
		buttons: [
			'copy', 'csv', 'excel', 'print',
            {
                extend: 'pdfHtml5',
				
                orientation: 'landscape',
                pageSize: 'A4'
            }
        ],

		scrollY:'600px',
	});
} );

	</script>
<script src="js/invoice.js"></script>
<script src="js/computerInvoice.js"></script>

</body>
</html>