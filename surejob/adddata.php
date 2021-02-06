<?php
include 'openconnection.php';
if(isset($_POST['submit'])){
    $jobtitle = $_POST['jobtitle'];
    $companyname = $_POST['companyname'];
  	$jobcategory = $_POST['jobcategory'];
    $companyurl = $_POST['companyurl'];
    
    $filelogo = $_FILES['filelogo']['name'];
    $tmp_name = $_FILES['filelogo']['tmp_name'];
    $path = "logo/".$filelogo;
    move_uploaded_file($tmp_name,$path);




    $companylocation = $_POST['companylocation'];
    $otherinfo = $_POST['otherinfo'];
   
    

$query = "INSERT INTO add_job(jobtitle,companyname,jobcategory,companyurl,filelogo,companylocation,otherinfo) VALUES ('$jobtitle','$companyname','$jobcategory','$companyurl','$filelogo','$companylocation','$otherinfo')";
if($conn->query($query) === TRUE){
	?>
	<script>
		alert("Done !!!!");
		location.href = 'admin/addjob.php';
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Registration unsuccessfull");
		location.href = 'index.php';
	</script>
	<?php
}
}
include 'closeconnection.php';
?>