<?php
include '../openconnection.php';
if(isset($_GET['dlt_id']))
{
    $id = $_GET['dlt_id'];
  
$query = "DELETE FROM add_job WHERE id='$id' ";

if($conn->query($query) === TRUE){
    ?>
    <script>
        alert("Done !!!!");
        location.href = 'addjob.php';
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("Update unsuccessfull");
        location.href = 'addjob.php';
    </script>
    <?php
}
}
include '../closeconnection.php';
?>
