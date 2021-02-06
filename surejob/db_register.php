<?php
include 'openconnection.php';
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
  	$location = $_POST['location'];
    $phonenum = $_POST['phonenum'];
    $education = $_POST['education'];
    $joblocation = $_POST['joblocation'];
    $jobfield = $_POST['jobfield'];
    $vehicle = $_POST['vehicle'];
    $license = $_POST['license'];
    $gender = $_POST['gender'];
    $status="pending";
    $files = $_FILES['files']['name'];
    $tmp_name = $_FILES['files']['tmp_name'];
    $path = "upload/".$files;
    move_uploaded_file($tmp_name,$path);
  }
    
$query = "INSERT INTO tbl_users (fullname,email,location,phonenum,education,joblocation,jobfield,vehicle,license,gender,files,status) VALUES ('$fullname','$email','$location','$phonenum','$education','$joblocation','$jobfield','$vehicle','$license','$gender','$files','$status')";


if($conn->query($query) === TRUE){
	session_start();
	$_SESSION['registered']="registered";
	header('location: register.php');
}
else
{
	?>
	<script>
		alert("Registration unsuccessfull");
		location.href = 'register.php';
	</script>
	<?php
}


include 'closeconnection.php';
?> 


<?php 
include 'openconnection.php';
 
if (isset($_POST["submit"]))
 {
     
    
 
    #temporary file name to store file
    $img = $_FILES['files'];
    #sql query to insert into database
    $sql = "INSERT INTO tbl_users   VALUES('$img')";
 
    if(mysqli_query($sql)){

        move_uploaded_file($img['tmp_name'],"upload/".$img['name']);
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 include 'closeconnection.php';

 
?>

