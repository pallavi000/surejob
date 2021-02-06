<?php
include '../openconnection.php';
if(isset($_POST['submit'])){
    $educationname = $_POST['educationname'];
  
$query = "INSERT INTO tbl_education (education_name) VALUES ('$educationname')";
if($conn->query($query) === TRUE){
	?>
	<script>
		alert("Done !!!!");
		location.href = ' education.php';
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Update unsuccessfull");
		location.href = 'education.php';
	</script>
	<?php
}
}
include '../closeconnection.php';
?>