<?php
session_start();
if(!isset($_SESSION['loginsession']))
echo "<script>location.href = '../login.php';</script>";
if($_SESSION['loginsession'] != "login"){
    echo "<script>location.href = '../login.php';</script>";
}
?>







<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUREJOB-Admin Panel</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<style type="text/css">
    
.affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
  }

  .affix + .container-fluid {
    padding-top: 70px;
  }
</style>





</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-expand top-navbar " data-spy="affix" data-offset-top="197" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse" >
                  <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:white; font-size:28px;"></i></span>   
                </button>
                <a class="navbar-brand" href="admin.php">ADMIN</a>
            </div>

            <ul class="nav navbar-top-links navbar-right" >
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="admin.php" style="background-color:#040430;"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Forms<span class="fa arrow"></span></a>
                        <ul class="nav nav-label">
                            <li>
                                <a href="newforms.php">New Forms</a>
                            </li>
                            <li>
                                <a href="allforms.php">Approved Jobs</a>
                            </li>
                             <li>
                                <a href="allforms.php">Denied Jobs</a>
                            </li>
                             <li>
                                <a href="allforms.php">All Forms</a>
                            </li>
                            
                        </ul>
                    </li>
                
                     <li>
                        <a href="addjob.php"><i class="fa fa-sitemap"></i>Jobs </a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Extra<span class="fa arrow"></span></a>
                        <ul class="nav">
                            <li>
                                <a href="education.php">Education</a>
                            </li>
                            <li>
                                <a href="joblocation.php">Job Location</a>
                            </li>
                             <li>
                                <a href="jobfield.php">Job Field</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small>Summary</small>
                        </h1>
						
                    </div>
                </div>

                 <?php
  include '../openconnection.php';
  $query="SELECT COUNT(id) as totalnew from tbl_users where status='pending'";
  $result=$conn->query($query);
  $rows = $result->fetch_assoc();
  include '../closeconnection.php';

  ?>



              
                <div class="row">
                    <div class="col-md-4">
                        <div style="background:linear-gradient(135deg, #fad961 0%,#f76b1c 100%); height: 120px; border-radius: 15px; "><span class="fa fa-user" style="color: white; padding: 2%; font-size: 300%;"></span>
                            <div class="text-right" style="color: white; margin-right: 15px; margin-top: -50px; font-size: 50px;"><?php echo $rows['totalnew']; ?></div><span style="color: white;margin-right: 15px; font-size: 20px; float: right;">New registration
                            </span>
                        </div>
                    </div>

                     <?php
  include '../openconnection.php';
  $query="SELECT COUNT(id) as totalapproved from tbl_users where status='approved'";
  $result=$conn->query($query);
  $rows = $result->fetch_assoc();
  include '../closeconnection.php';

  ?>







                    <div class="col-md-4">
                        <div style="background:linear-gradient(135deg, #b1ea4d 0%,#459522 100%); height: 120px; border-radius: 15px; "><span class="fa fa-user" style="color: white; padding: 2%; font-size: 300%;"></span>
                            <div class="text-right" style="color: white; margin-right: 15px; margin-top: -50px; font-size: 50px;"><?php echo $rows['totalapproved']; ?></div><span style="color: white;margin-right: 15px; font-size: 20px; float: right;">Total Approved Form</span>
                        </div>
                    </div>



                     <?php
  include '../openconnection.php';
  $query="SELECT COUNT(id) as totalform from add_job";
  $result=$conn->query($query);
  $rows = $result->fetch_assoc();
  include '../closeconnection.php';

  ?>





                    <div class="col-md-4">
                        <div style="background:linear-gradient(135deg, #65799b 0%,#5e2563 100%);height: 120px; border-radius: 15px; "><span class="fa fa-user" style="color: white; padding: 2%; font-size: 300%;"></span>
                            <div class="text-right" style="color: white; margin-right: 15px; margin-top: -50px; font-size: 50px;"><?php echo $rows['totalform']; ?></div><span style="color: white;margin-right: 15px; font-size: 20px; float: right;"<>Total Forms</span>
                        </div>
                </div>
				
                <!-- /. ROW  -->

                
		
				
				
                
                <!-- /. ROW  -->
				<footer><p>Powered by <a href="https://bitmapitsolution.com" target="_blank">Bitmap I.T. Solution Pvt. Ltd.</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>