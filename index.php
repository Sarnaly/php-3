<?php 
    session_start();
    if(!isset($_SESSION['user_login'])){
        header('location:../login_form/login.php');
        
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>cms dashboard
		</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	
	
	
	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
  


 <div class="wrapper"> 
        <div class="body-overlay"></div>

                                           <!-- Sidebar  -->

        <Nav class="sidebar" id="sidebar">
            <div class="sidebar-header"> 
                <h2><img src="./img/fcti-soft-brand-icon.png" class="img-fluid" alt=""></h2>
            </div>
            <ul class="list-unstyled components"> 
                <li class="active"> 
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                    <div class="small-screen navbar-display">
                        <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="#homeSubmenu0" data-toggle="collapse" class="drowdown-toggle"></a>
                        
                        </li>
                        <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                </li>
                <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">person</i><span>person</span></a>
					
					
                    <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                <li><a href="">Edit Profile</a></li>
								<li><a href="">Change Password</a></li>
								<li><a href="../login_form/logout.php">Logout</a></li>
                    </ul>
                </li>
				
				
                    </div>

                    <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">aspect_ratio</i><span>Admission</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <li><a class="nav-link" href="">Admission</a></li>
                    <li><a class="nav-link" href="">Admission Report</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">apps</i><span>Courses</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                    <li><a class="nav-link" href="">Add Course</a></li>
                    <li><a class="nav-link" href="">All Courses</a></li>
                    </ul>
                </li>
				
				 <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">equalizer</i>
			            <span>Student Account</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                    <li><a class="nav-link" href="">All Student Account List</a></li>
									<li><a class="nav-link" href="">Student Active Account</a></li>
									<li><a class="nav-link" href="">Student Inactive Account</a></li>
                    </ul>
                </li>

				  <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">extension</i><span>Student List</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                    <li><a class="nav-link" href="">Course Wise List</a></li>
                    </ul>
                </li>
				
				<li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">settings</i><span>setting</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                     <li><a class="nav-link" href="">Edit Profile</a></li>
									<li><a class="nav-link" href="">Change Password</a></li>
									<li><a class="nav-link" href="">User List</a></li>
									<li><a class="nav-link" href="">Add User</a></li>
									<li><a class="nav-link" href="">Logo Change</a></li>
                    </ul>
                </li>
               
			   
			   
			   <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">grid_on</i><span>tables</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
			   
			     <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">content_copy</i><span>Pages</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
               <li class="">
                    <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
                </li>
				
				 <li  class="">
                    <a href="#"><i class="material-icons">library_books</i><span>Calender</span></a>
                </li>

            </ul>
        </Nav>



                                             <!-- Page-Content  -->

            <div id="content">
                                              <!-- Top Navbar -->
                
                <div class="top-navbar"> 
                    <Nav class="navbar navbar-expand-lg">
                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button> 
                         <a class="navbar-brand" href="#"> Dashboard </a>
                         <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                   <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link">
                                   <span class="material-icons">notifications</span>
								   <span class="notification">4</span>
                               </a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">apps</span>
								</a>
                            </li>
							
                            
								 <li class="dropdown nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">person</span>
								   
                               </a>
                               
                                <ul class="dropdown-menu">
                                 <li><a href="">Edit Profile</a></li>
								<li><a href="">Change Password</a></li>
								<li><a href="../login_form/logout.php">Logout</a></li>
                                </ul>
                            </li>
								
				
							
                        </ul>
                    </div>
                    </Nav>
                </div>

                                 <!-- main_content -->

    <div class="main-content">
        <div class="row"> 
        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>All Students</strong></p>
                                    <h3 class="card-title">613</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       
                                        <a href="#pablo">Views All Students</a>
                                        <i class="material-icons text-info" style="font-size:20px;">arrow_right_alt</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">groups</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Offline Students</strong></p>
                                    <h3 class="card-title">613</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <a href="#pablo">Views All Students</a>
                                    <i class="material-icons text-info" style="font-size:20px;">arrow_right_alt</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">groups</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Online Student</strong></p>
                                    <h3 class="card-title">0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <a href="#pablo">Views Online Student</a>
                                    <i class="material-icons text-info" style="font-size:20px;">arrow_right_alt</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    
                                <span class="material-icons">
                                groups
                                    </span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Total Student</strong></p>
                                    <h3 class="card-title">613</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <a href="#pablo">Views Total Student</a>
                                    <i class="material-icons text-info" style="font-size:20px;">arrow_right_alt</i>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>


        <div class="row ">
                        <div class="">
                            <div class="card" style="min-height: 485px">
                                
                               
                            </div>
                        </div>
                      
                       
                                </div>
    </div>




            </div>

   </div>

					
					
					






	
  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });


     
           
       
</script>
  
  



  </body>
  
  </html>


