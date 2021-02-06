 <?php
  include '../openconnection.php';
  if (isset($_POST['update'])) {
  	$ids=$_POST['jobidtoupdate'];
    $jobtitle=$_POST['jobtitle'];
    $companyname=$_POST['companyname'];
    $jobcategory=$_POST['jobcategory'];
    $companyurl=$_POST['companyurl'];
    $filelogo=$_POST['filelogo'];
    $companylocation=$_POST['companylocation'];
    $otherinfo=$_POST['otherinfo'];

    // $insertquery = "INSERT INTO add_job(jobtitle,companyname,jobcategory,companyurl,filelogo,companylocation,otherinfo) VALUES ('$jobtitle','$companyname','$jobcategory','$companyurl','$filelogo','$companylocation','$otherinfo')" ;


    $query="UPDATE add_job SET jobtitle='$jobtitle',companyname='$companyname',jobcategory='$jobcategory',companyurl='$companyurl',filelogo='$filelogo',companylocation='$companylocation',otherinfo='$otherinfo' WHERE id='$ids' ";


    if($conn->query($query) === TRUE){
      ?>
      <script type="text/javascript">
      alert("data updated successfully");
      location.href = 'addjob.php';
    </script>
      <?php
    }
    else{
    

      ?>
      <script type="text/javascript">
      alert("data not updated");
      location.href = 'addjob.php';
    </script>
      <?php
    }
  
  }
  include '../closeconnection.php';
  ?>