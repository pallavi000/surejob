

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.nav-link{
		color:white;
	}
	.nav-link :hover{
		color: #db4716;
	}
  body {
    background-color: #f5f5f5;
  }
  .navbar-nav :hover{
    color: #db4716;
  }




* {box-sizing: border-box;}

/* Style the input container */
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;

}

/* Style the form icons */
.icon {
  padding: 14px;
  background: #034c83;
  color: white;
  min-width: 50px;
  text-align: center;
  border-radius: 50px;
}

/* Style the input fields */
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  border-radius: 40px;

}

.input-field:focus {
  border: 2px solid #034c83;

}

/* Set a style for the submit button */
.btn {
  background-color: #034c83;
  color: white;
  padding: 4px 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

select:required:invalid {
  color: gray;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}

   
</style>





</head>
<body>

<div class=" container-fluid" style="background-image: url('img/re_back.jpg'); background-size: cover;background-repeat: no-repeat">
  <div class="row justify-content-center ">

  <div class="shadow p-3 mb-5 bg-white rounded mt-3" style="width:auto; height: auto;">
   <div class="form">
    	 <h2 style="text-align: center;"> Edit Your Information Here</h2>
  			
  			<form action="db_updatejob.php" method="POST" style="box-shadow: 1px grey;">
  

  <?php
  include '../openconnection.php';

  $ids=$_GET['update_id'];
  $showquery="SELECT * from add_job WHERE id='$ids'";
  $showdata=mysqli_query($conn,$showquery);
  $arrdata=mysqli_fetch_array($showdata);

  
    // $insertquery = "INSERT INTO add_job(jobtitle,companyname,jobcategory,companyurl,filelogo,companylocation,otherinfo) VALUES ('$jobtitle','$companyname','$jobcategory','$companyurl','$filelogo','$companylocation','$otherinfo')" ;


   
  include '../closeconnection.php';
  ?>

 
  <div class="input-container mt-3">
    <input class="input-field" type="text" placeholder="job title" name="jobtitle" value="<?php echo $arrdata['jobtitle'];?>">
  </div>


  <div class="input-container">
    <input class="input-field" type="text" placeholder="company name" name="companyname" value="<?php echo $arrdata['companyname'];?>">
  </div>

<div class="input-container">
    
    <select class="input-field" name="jobcategory" value="<?php echo $arrdata['jobcategory'];?>"required>
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
   
  <div class="input-container">
    <input class="input-field" type="hidden" placeholder="job title" name="jobidtoupdate" value="<?php echo $ids;?>">
    <input class="input-field" type="text" placeholder="company url" name="companyurl" value="<?php echo $arrdata['companyurl'];?>">
  </div>

<div class="form-group">
      <input type="file" class="form-control-file border" name="filelogo" value="<?php echo $arrdata['filelogo'];?>">
    </div>
  
  <div class="input-container">
    
    <input class="input-field" type="text" placeholder="company location" name="companylocation" value="<?php echo $arrdata['companylocation'];?>">
  </div>
  
  <div class="input-container">
      <textarea class="input-field" rows="5" name="otherinfo" value="<?php echo $arrdata['otherinfo'];?>"></textarea>
    </div>



  <br>
  <button type="submit" name="update"  value="update" class="btn btn-primary"> Update </button>

<div>
  
</div>
</form>
</div>
</div>
    


</body>
</html>
