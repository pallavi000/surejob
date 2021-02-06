
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
    <title>SUBLIME-Admin Panel</title>
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">



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
        <nav class="navbar navbar-default top-navbar " data-spy="affix" data-offset-top="197" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
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
                                <a href="approvedforms.php">Approved Forms</a>
                            </li>
                            <li>
                                <a href="deniedforms.php">Denied Forms</a>
                            </li>
                            <li>
                                <a href="allforms.php">All Forms</a>
                            </li>
                            
                        </ul>
                    </li>
                
                     <li>
                        <a href="addjob.php"><i class="fa fa-sitemap"></i>Jobs</a>
                        
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
                            JOBS <small>Manage Jobs</small>
                        </h1>
            
                    </div>
                </div>

                <div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal">
                      Add Job
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h3 class="modal-title"> <font face="verdana">Add New Job Here </font></h3>
                            
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <form action="adddata.php" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="text">Job Title:</label>
                                <input type="text" class="form-control" name="jobtitle" placeholder="Job Title">
                              </div>
                              <div class="form-group">
                                <label for="text">Company Name:</label>
                                <input type="text" class="form-control" name="companyname" placeholder="company name">
                              </div>
                              <div class="form-group" >
                                <label for="text">Job Category:</label><br>
                                <select class="input-field" name="jobcategory" required>
                                    <option  value="" disabled selected> Job Category </option>
                                    <option>IT and Telecommunication</option>
                                    <option>Accounting</option>
                                    <option>Hospitality</option>
                                    <option>Customer Services</option>
                                    <option>Education</option>
                                    <option>Banking Services</option>
                                    <option>Front Desk</option>
                                </select>
                              </div>

                                
                                <div class="form-group">
                                <label for="text">Company Url :</label>
                                <input type="text" class="form-control" name="companyurl" placeholder="website url / facebook-page url">
                              </div>


                              <div class="form-group">
                                <label for="text">Choose Logo :</label>
                                  <input type="file" class="form-control-file border" name="filelogo">
                                </div>

                                <div class="form-group">
                                <label for="text">Company Location :</label>
                                <input type="text" class="form-control" name="companylocation" placeholder="Company Location">
                              </div>

                              <div class="form-group">
                                  <label for="comment">Others Info: </label>
                                  <textarea class="form-control" rows="5" name="otherinfo"></textarea>
                                </div>
                              
                               <div class="modal-footer">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
                          </div>
                                    


                            </form>



                          </div>

                    

                        </div>
                      </div>
                    </div>
                </div>
                <br>
                <br>
 <table id="example" class="table table-striped table-bordered " cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Job Title</th>
      <th class="th-sm">Company Name</th>
      <th class="th-sm">Job Category</th>
      <th class="th-sm">Company URL</th>
      <th class="th-sm">Logo</th>
      <th class="th-sm">Company Location</th>
      <th class="th-sm">Others Info</th>
      <th class="th-sm">Action</th>
    </tr>
  </thead>
  <tbody>


<!-- ######################################################################################################################################## -->




<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       
        <form action="adddata.php" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="text">Job Title:</label>
                                <input type="text" class="form-control" name="jobtitle" id="title" placeholder="Job Title">
                              </div>
                              <div class="form-group">
                                <label for="text">Company Name:</label>
                                <input type="text" class="form-control" name="companyname" id="companyname" placeholder="company name" >
                              </div>
                              <div class="form-group"  >
                                <label for="text">Job Category:</label><br>
                                <select class="input-field" name="jobcategory" id="jobcategory" required>
                                    <option  value="" disabled selected> Job Category </option>
                                    <option>IT and Telecommunication</option>
                                    <option>Accounting</option>
                                    <option>Hospitality</option>
                                    <option>Customer Services</option>
                                    <option>Education</option>
                                    <option>Banking Services</option>
                                    <option>Front Desk</option>
                                </select>
                              </div>

                                
                                <div class="form-group">
                                <label for="text">Company Url :</label>
                                <input type="text" class="form-control" id="companyurl" name="companyurl" placeholder="website url / facebook-page url">
                              </div>


                              <div class="form-group">
                                <label for="text">Choose Logo :</label>
                                  <input type="file" class="form-control-file border" id="filelogo" name="filelogo" value="submit">
                                </div>

                                <div class="form-group">
                                <label for="text">Company Location :</label>
                                <input type="text" class="form-control" name="companylocation" id="companylocation" placeholder="Company Location">
                              </div>

                              <div class="form-group">
                                  <label for="comment">Others Info: </label>
                                  <textarea class="form-control" rows="5" id="otherinfo" name="otherinfo"></textarea>
                                </div>
                              
                               <div class="modal-footer">
                            <button type="submit" value="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
                          </div>
                                    


                            </form>


      </div>

  </div>
</div>

<?php 
include '../openconnection.php';

$query = "SELECT * FROM add_job";
$result = $conn->query($query);

include '../closeconnection.php';
while($rows = $result->fetch_assoc())
{
 ?>




  
    <tr>
      <td><?php echo $rows['jobtitle'];?></td>
      <td><?php echo $rows['companyname'];?></td>
      <td><?php echo $rows['jobcategory'];?></td>
      <td><?php echo $rows['companyurl'];?></td>
      <td><a href="logo/<?php echo $rows['filelogo'];?>" target="_blank"><?php echo $rows['filelogo'];?></a></td>
      <td><?php echo $rows['companylocation'];?></td>
      <td><?php echo $rows['otherinfo'];?></td>
      
  
       <td>





          <a href="updatejob.php?update_id=<?php echo $rows['id'];?>"  class="btn btn-primary btn-sm" name="edit">EDIT</a>
           <a href="deletejob.php?dlt_id=<?php echo $rows['id'];?>" class="btn btn-danger btn-sm" name="delete_btn">DELETE</a>
        </td>
      
    </tr>


    <?php
  }
  ?>
  
  </tbody>
  
</table>
          
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
  <script>
    
    $(document).ready(function()
    {

      $(.editbtn) on('click',function(){

        $(#myModal3).modal('show')

          $tr = $(this).closest('tr');
          var data = $tr.children('td').map(function(){

            return $(this).text();

          }).get();


          console.log(data);
          $('#jobtitle').val(data[0]);
          $('#companyname').val(data[0]);
          $('#jobcategory').val(data[0]);
          $('#companyurl').val(data[0]);
          $('#filelogo').val(data[0]);
          $('#companylocation').val(data[0]);
          $('#otherinfo').val(data[0]);



















        });





    });







  </script>





  
  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>
  <!-- <script type="text/javascript">https://code.jquery.com/jquery-3.3.1.js</script>
  <script type="text/javascript">https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js</script> -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
   

    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

    <script type="text/javascript">
        $('#example').dataTable({
});
       
    </script>


</body>

</html>





