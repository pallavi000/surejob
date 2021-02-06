<?php
session_start();

include 'openconnection.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$query = "SELECT * FROM tbl_login WHERE email='$username' and password='$password'";
$rows = $conn->query($query);
if($rows->num_rows>0){
	$_SESSION['loginsession'] = "login";
	?>
	<script>
		
		location.href = 'admin/admin.php';
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Invalid Login Details");
		location.href = 'index.php';
	</script>
	<?php
}



include 'closeconnection.php';
?>