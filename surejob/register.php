
 <?php 
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Login | sUREjob</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="sweetalert2.min.js"></script>
<!-- <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=711797392550624&autoLogAppEvents=1"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
    .cat-div {box-shadow: 5px solid #555555;}
    .cat-div ul{list-style-type: none;}

    .cat-div ul li{
        display: inline-block; 
        text-align: center; 
        color:white; 
        font-size: 16px; 
        height: 75px;
        width: 130px;
        margin: 10px;
    }
    .cat-div ul li i{color:#EC7C03; font-size: 25px;}
    .cat-div ul li i:hover {color: #FFA900;}
    .cat-div ul li a{color:white;}
    .icon-wrp{ padding: 10px;}
  .seperator {
    height: 5px;
    margin: 25px 0;
    width:auto;
    background-image: radial-gradient(#CCC, #FFF), radial-gradient(#CCC, #FFF);
    background-position: 0, 100%, 0, 100%;
}
  .detail-wrp {   
      box-shadow: 0 4px 7px rgba(0,0,0,0.4);
      transition: top .2s ease-in-out,box-shadow .2s ease-in-out;
      -webkit-transition: top .2s ease-in-out,box-shadow .2s ease-in-out; 
    -moz-box-shadow:    3px 3px 5px 6px #ccc;
    -webkit-box-shadow: 3px 3px 5px 6px #ccc;
      box-shadow: 0px 2px 7px 1px #ccc;
  }
  .detail-wrp:hover{box-shadow: 5px 6px 9px 2px #ccc;  border-bottom: 2px solid orange;}
  .detail-wrp h6 {font-size:14px; }
  .detail-wrp h6 a:hover{color:#000;} 
  .job-header-title {font-weight: 700; font-size: 20px; /*text-shadow: 0 3px 7px rgba(0,0,0,0.25);*/}
  .job-header-title span,.job-header-title i{color:#FBBC05;}

  .com-logo { padding: 15px 0 10px 10px;}
  .d-text { color: #283e4a; font-size: 14px;}
  .d-text a{color:#111;}

  .d-text .d-job{color: #333;}
  .d-text .time-left { font-size: 11px; color: #FF5A00;}
  .d-text .time-left:hover{text-decoration: none;}
  .navbar-toggler-icon{
    style="color: white;"
  }
  .footer{
    background: #152F4F;
    color:white;
    
    .links{
      ul {list-style-type: none;}
      p a{
        color: white;
        transition: color .2s;
        &:hover{
          text-decoration:none;
          color:#000000;
          }
      }
    }  
    .about-company{
      i{font-size: 25px;}
      a{
        color:white;
        transition: color .2s;
        &:hover{color:#4180CB}
      }
    } 
    .location{
      i{font-size: 18px;}
    }
    .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
  }
</style>
  </head>
  <body style="font-family: 'Helvetica', 'Arial', sans-serif;">  
    <div class="container-fluid">
<div class="row " >
      <div class="col-sm-2 col-md-5 mt-2 ml-auto text-center">
        <p style="padding-right: 30px; color: #034c83;">
        <i class="fas fa-phone-square-alt"></i><b>  Phone : 056-571516    </b> &nbsp; <i class="fas fa-envelope-square"></i>   <b>Email:<a href="mailto: inquiry@surejob.com.np"> inquiry@surejob.com.np </a></b>
    </p>
  </div>
      
    </div>
  </div>
    <nav class="navbar navbar-expand-sm sticky-top" style="background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(11,11,119,1) 0%, rgba(12,168,200,1) 100%);">
         <a href="#" class="navbar-brand">
        <img src="img/logosure.png" height="70px" alt="Surejob " style="margin-left: 10%;">
    </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon " ><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto" >
            
                 <li class="nav-item nav-link active">
             <a class="nav-link" href="index.php" ><i class="fas fa-home"></i> <b>Home</b></a>
           </li>
            <li class="nav-item nav-link active">
             <a class="nav-link" href="jobseeker.php"><i class="fas fa-child"></i> <b>Jobseeker</b></a>
           </li>
             <li class="nav-item nav-link active">
             <a class="nav-link" href="contact_us.php"><i class="fas fa-address-book"></i> <b>Contact-us</b></a>
           </li>
           <li class="nav-item nav-link active">
             <a class="nav-link" href="register.php"><b><i class="fas fa-user-plus"></i> Register</b></a>
           </li>
            <li class="nav-item nav-link active">
             <a class="nav-link" href="login.php"><b><i class="fas fa-sign-in-alt"></i> Login</b></a>
           </li>

                
  
            </div>
            
        </div>
    </nav>

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

<?php 
if(isset($_SESSION['registered'])){
if($_SESSION['registered']==="registered"){
  ?>

<script type="text/javascript">
  Swal.fire({
  title: 'Registration Successfull!',
  text: 'Thank you,We got your details.We will contact you very soon.Thank you for choosing SureJob.com',
  icon: 'success',
  confirmButtonText: 'Close'
})
</script>

<?php
}
$_SESSION['registered']="";
}
?>

<div class=" container-fluid" style="background-image: url('img/re_back.jpg'); background-size: cover;background-repeat: no-repeat">
  <div class="row justify-content-center ">

  <div class="shadow p-3 mb-5 bg-white rounded mt-3" style="width:auto; height: auto;">
   <div class="form">
    	 <h2 style="text-align: center;">Create an account</h2>
  			<p style="text-align: center;">I am a jobseeker here</p>
  			<form action="db_register.php"  method="POST" enctype="multipart/form-data" style="box-shadow: 1px grey;">
  
 
  <div class="input-container">
    <i class="fa fa-user icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="text" placeholder="Full Name*" name="fullname" required="">
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="email" placeholder="Email*" name="email" required="">
  </div>

<div class="input-container">
    <i class="fa fa-map-marker-alt icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="location" placeholder="Current Location" name="location" required="">
  </div>
   
  <div class="input-container">
    <i class="fas fa-phone-alt icon"></i> &nbsp;&nbsp;
    <input class="input-field" type="number" placeholder="Phone Number" name="phonenum" required="">
  </div>


  
  <div class="input-container">
	<i class="fas fa-user-graduate icon"></i>&nbsp;&nbsp;
  <select class="input-field" name="education" required>
    <option value="" disabled selected>Current Education</option>
    
        <?php
  include 'openconnection.php';
  $query="SELECT * FROM tbl_education";
  $result=$conn->query($query);
  
  include 'closeconnection.php';
  while($rows = $result->fetch_assoc())
  {
  ?>
  <option><?php echo $rows['education_name']; ?></option>
  <?php
}
  ?>
</select>
  	</div>

  	 <div class="input-container">
	<i class="fas fa-map-marked-alt icon"></i>&nbsp;&nbsp;
      <select class="input-field" name="joblocation" required="">
    <option value="" disabled selected>Job location you want to work </option>
       
        <?php
  include 'openconnection.php';
  $query="SELECT * FROM tbl_job_location";
  $result=$conn->query($query);
  
  include 'closeconnection.php';
  while($rows = $result->fetch_assoc())
  {
  ?>
  <option><?php echo $rows['job_location']; ?></option>
  <?php
}
  ?>
      </select>
  	</div>
  	 <div class="input-container">
	<i class="fas fa-briefcase icon"></i>&nbsp;&nbsp;
      <select class="input-field" name="jobfield" required="">
    <option value="" disabled selected>Job field you want to work in</option>
       
        <?php
  include 'openconnection.php';
  $query="SELECT * FROM tbl_job_field";
  $result=$conn->query($query);
  
  include 'closeconnection.php';
  while($rows = $result->fetch_assoc())
  {
  ?>
  <option><?php echo $rows['job_field']; ?></option>
  <?php
}
  ?>
      </select>
  	</div>

 <div class="input-container">
     <div class="form-group">
<i class="fas fa-bicycle icon"></i>
	 	<label for="Vehicle">Two Wheelers:&nbsp;&nbsp;</label>
	 	<div class="form-check-inline">
 			 <label class="form-check-label">
   				 <input type="radio" class="form-check-input" name="vehicle" value="yesvehicle">Yes
 			 </label>
		</div>
		<div class="form-check-inline">
  			<label class="form-check-label">
   				 <input type="radio" class="form-check-input" name="vehicle" value="novehicle">No
  			</label>
		</div>
	  </div>
  </div>

  <div class="input-container">
     <div class="form-group">
<i class="fas fa-id-card icon"></i>
	 	<label for="Vehicle">License:&nbsp;&nbsp;</label>
	 	<div class="form-check-inline">
 			 <label class="form-check-label">
   				 <input type="radio" class="form-check-input" name="license" value="yeslicense">Yes
 			 </label>
		</div>
		<div class="form-check-inline">
  			<label class="form-check-label">
   				 <input type="radio" class="form-check-input" name="license" value="nolicense">No
  			</label>
		</div>
	  </div>
  </div>


<div class="input-container">
     <div class="form-group">
<i class="fas fa-transgender icon"></i>
	 	<label for="Vehicle">Gender:&nbsp;&nbsp;</label>
	 	<div class="form-check-inline">
 			 <label class="form-check-label">
   				 <input type="radio" class="form-check-input" name="gender" value="male">Male
 			 </label>
		</div>
		<div class="form-check-inline">
  			<label class="form-check-label">
   				 <input type="radio" class="form-check-input" name="gender" value="female">Female
  			</label>
		</div>
	  </div>
  </div>

  <!-- <div class="form-inline">
   	 <div class="input-container">
   	 	   <i class="fa fa-key icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="password" placeholder="Password*" name="password">
<i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password*" name="cpassword">
    </div>
</div> -->

 <div class="form-group">
      <input type="file" class="form-control-file border" name="files">
    </div>
  
 
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
      
        <input type="checkbox" class="form-check-input" name="remember">I agree to the<a href="#"> terms and conditions </a>of Surejob.
      </label>
    </div>   
  <br>
  <button type="submit" name="submit"  value="submit" class="btn btn-primary">Register Now</button>

<div>
  
</div>
</form>
</div>
</div>





  <?php
  include 'footer.php';

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