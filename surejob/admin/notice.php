
<?php

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WAVE-Admin Panel</title>
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
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">WAVE ADMIN</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
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
                        <a href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i>Forms</a>
                    </li>
                     <li>
                        <a class="active-menu" href="notice.php"><i class="fa fa-pencil"></i>Manage Notice</a>
                    </li>
                     <li>
                        <a href="table.html"><i class="fa fa-picture-o"></i>Gallery</a>
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
                           Manage Notice <small>Edit your Notice</small>
                        </h1>
						
                    </div>
                </div>
				
				
                <!-- /. ROW  -->

                
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 ">

                        <div class="panel panel-default container-fluid">
                            <div class="panel-heading">
                                <form action="" method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <label for="newnotice">Enter New Notice:</label>
                <input id="newnotice" class="form-control" name="newnotice" placeholder="New Notice" required>             
                
              </div>
              <button class="btn btn-default btn-primary text-uppercase" name="submit" type="submit" value="submit">Update Notice</button>
              </form>
                            </div> 
                            
                        </div>

                    </div>
                </div>
				
				 

                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 ">

                        <div class="panel panel-default container-fluid">
                            <div class="panel-heading">
                               <label for="newnotice">Current Notice:</label>
                               <marquee class="bg-warning">
                                <?php
                                include '../dbConnection.php';
                                $stmt = $conn->prepare("SELECT notice from tblnotice where id=(Select max(id) from tblnotice)");
                                $stmt->execute();
                                $n = $stmt->fetch();
                                echo $n['notice'];
                                include '../closeDbConnection.php';

                                ?>
                               </marquee>
                            </div> 
                            
                        </div>

                    </div>
                </div>



				
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Notices
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Notice</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php
                                include '../dbConnection.php';
                                $stmt = $conn->prepare("SELECT date,notice from tblnotice order by id desc");
                                $stmt->execute();
                                                               
                                include '../closeDbConnection.php';
                                while ($n = $stmt->fetch()) {
                                    # code...
                                
                                ?>
                                                <tr>
                                                <td><?php echo $n['date']; ?></td>
                                                <td><?php echo $n['notice']; ?></td>
                                                <td><button class="btn btn-sm btn-success">View</button></td>
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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

<?php
if(isset($_POST['submit'])){
include '../dbConnection.php';

$notice = $_POST['newnotice'];
$stmt = $conn->prepare("INSERT INTO tblnotice(notice,date) values(:notice,curdate())");
$stmt->bindValue(':notice',$notice);
if($stmt->execute()){
    ?>
    <script language="javascript">
        alert("Notice Updated Successfully");
        location.href = 'notice.php';
    </script>
    <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert("Something went wrong");
    </script>
    <?php
    
}
include '../closeDbConnection.php';
}
?>

