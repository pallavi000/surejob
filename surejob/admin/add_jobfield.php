<?php
include '../openconnection.php';
if(isset($_POST['submit'])){
    $jobfieldname = $_POST['jobfieldname'];
  
$query = "INSERT INTO tbl_job_field (job_field) VALUES ('$jobfieldname')";
if($conn->query($query) === TRUE){
	?>
	<script>
		alert("Done !!!!");
		location.href = ' jobfield.php';
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Update unsuccessfull");
		location.href = 'jobfield.php';
	</script>
	<?php
}
}
include '../closeconnection.php';
?>