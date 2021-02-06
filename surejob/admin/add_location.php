<?php
include '../openconnection.php';
if(isset($_POST['submit'])){
    $locationname = $_POST['locationname'];
  
$query = "INSERT INTO tbl_job_location (job_location) VALUES ('$locationname')";
if($conn->query($query) === TRUE){
	?>
	<script>
		alert("Done !!!!");
		location.href = 'joblocation.php';
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Update unsuccessfull");
		location.href = 'joblocation.php';
	</script>
	<?php
}
}
include '../closeconnection.php';
?>