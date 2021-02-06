<?php 
include 'header.php';
 ?>
 
 <secion class="main-content"> 
    	<div class="container-fluid"> 
    		<div class="row"> 
    			<div class="col-xl-12 col-md-3 col-sm-12 py-3"> 
    				<div class="premium-div ">
    				<div class="row">
    				<div class="col-md-12 job-header-title text-center"">
    				 <i class="far fa-gem text-center"  style='color:#ed7913' ></i> <span style='color: #ed7913'><b>ALL</b></span><b> JOBS </b>

    				  </div>

    				 	 </div>
    				 	 <div class="seperator justify-content">
    				 	 </div>
                				 	 <div class="row">
                         <?php
                          include 'openconnection.php';
                          $query="SELECT * FROM add_job order by date_added ";
                          $result=$conn->query($query);
                          
                          include 'closeconnection.php';
                          while($rows = $result->fetch_assoc())
                          {
                          ?>


    						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 detail-div mb-3">
    				 	  	<div class="detail-wrp ">
    				 	  		<div class="row">
    				 	  			<div class="col-3 col-md-3 pr-2">
    				 	  				<div class="com-logo">
                     <img src="admin/logo/<?php echo $rows['filelogo']; ?>" height="70" width="80" style="margin-left: -25%; padding-right: 12%;" alt="Surejob">   
										</div>
    				 	  			</div>
    				 	  			<div class="col-9 col-md-9 d-text px-3 py-2">
    				 	  				<span class="marker-icon">
    				 	  					<i class="far fa-gem" style="font-size:10px; color: #ed7913; float: right;" ></i>
    				 	  				</span>
    				 	  				<h6 class "mb-1">
    				 	  					<a href=""> <?php echo $rows['jobtitle'];?></a>
    				 	  				</h6>
    				 	  				<a href="<?php echo $rows['companyurl'];?>" class="d-job" title="Infotech Services" target="_blank"><?php echo $rows['companyname'];?></a>
    				 	  				<br>
    				 	  				<a href="#." class="time-left"><i class="fas fa-history"></i> Date added: <?php echo $rows['date_added'];?></a>
    				 	  			</div>
    				 	  			
    				 	  		</div>
    				 	  	</div>
    				 	  </div>

                            <?php
                                 }
                            ?>






    				 	  


    				 	   


























    				
    				 	  		



    				 	  



    				 	  


    				 	  

























    				 	</div>
    				 </div>
    				</div>


</div>
</div>
</secion>

  <?php
  include 'footer.php';

  ?>
