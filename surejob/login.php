<?php 
session_start();
include 'header.php';
?>

<div class="bgimg">

<div class="container ">
	<div class="col-lg-4 ml-auto pt-4 text-center">
		<div class="card" >
			<div class="card-header" style="background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(11,11,119,1) 0%, rgba(12,168,200,1) 100%); " >
				<p class="text-center"><font color="white" size="6"><i class="fas fa-user"></i> Log In</font></p>
	
                      <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                        echo '<h5 class="bg-danger text-white"> '.$_SESSION['status'].'</h5>';
                        unset($_SESSION['status']);

                    }
                    ?>
				
			</div>

                  
			<div class="card-body" style="color:#C0C0C0;">
				<form action="db_login.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" name="username" placeholder="username" required="">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend" style="color: #034c83;">
							<span class="input-group-text" ><i class="fas fa-key" ></i></span>
						</div>
						<input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required required="8">
					</div>
					<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
					<div class="form-group">
						<input type="submit" value="Login" name="submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer"  >
				<div class="d-flex justify-content-center links" >
					Don't have an account ? <a href="#" style="color: yellow;"> Sign Up </a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
include 'footer.php';
 ?>