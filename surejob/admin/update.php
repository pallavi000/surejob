<?php 
 include 'openconnection.php';

 
    if(isset($_POST['update']))
    {
        $id = $row['id'];
        $jobtitle = $row['jobtitle'];
        $companyname = $row['companyname'];
        $jobcategory = $row['jobcategory'];
        $companyurl  = $row['companyurl'];
        $filelogo  = $row['filelogo'];
        $companylocation  = $row['companylocation'];
        $otherinfo  = $row['otherinfo'];
 
        $query = " UPDATE add_data set jobtitle = '".$jobtitle."', companyname='".$companyname."',jobcategory='".$jobcategory."',companyurl='".$companyurl."',filelogo='".$filelogo."',companylocation='".$companylocation."',otherinfo='".$otherinfo."' where id='".$id."'";
        $result = mysqli_query($conn,$query);
 
        if($result)
        {
            header("location:addjob.php");
        }
        else
        {
            echo ' Update Unsucessful ';
        }
    }
    else
    {
        header("location:addjob.php");
    }
 include 'closeconnection.php';

 
?>