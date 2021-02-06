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