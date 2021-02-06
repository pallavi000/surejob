<?php 
include 'header.php';
 ?>

 

<div class="container scrollmenu-group ">
    <div class="row">
        <div class="cat-div mt-3 scrollmenu" style="background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(11,11,119,1) 0%, rgba(12,168,200,1) 100%); border-radius: 25px;"> 
           <marquee behavior="alternate" scrolldelay="140">
            <ul class="p-0 mb-0"> 
                <li class="cat"> 
                    <a href="#"> 
                        <div class="icon-wrp"> 
                            <i class="fa fa-info-circle"></i> 
                        </div> 
                        
                        <div class="cat-text" style="font-family: 'Bree Serif', serif;"> IT&amp;Telecommunication </div> 
                         
                    </a> 
                </li> 
            <li class="cat"> 
                    <a href="#"> 
                        <div class="icon-wrp"> 
                            <i class="fa fa-bar-chart"></i>
                        </div> 
                        <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Accounting </div>  
                    </a> 
                </li> 
            <li class="cat">
                <a href="#"> 
                        <div class="icon-wrp"> 
                            <i class="fab fa-accessible-icon"></i>
                        </div> 
                        <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Hospitality </div> 
                        
                    </a> 
                </li> 
                <li class="cat">
                <a href="#"> 
                        <div class="icon-wrp"> 
                            <i class="fas fa-money-check-alt"></i>
                        </div> 
                        <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Financial Services </div> 
                        
                    </a> 
                </li> 
           <li class="cat"> 
                <a href="#"> 
                        <div class="icon-wrp"> 
                            <i class="fa fa-phone"></i> 
                        </div> 
                        <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Customer Service </div> 
                        
                    </a> 
                </li>
            <li class="cat"> 
                <a href="#">
                         <div class="icon-wrp"> 
                            <i class="fa fa-book"></i> 
                         </div> 
                         <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Education </div> 
                         
                    </a> 
                </li> 
            <li class="cat"> 
                <a href="#">
                         <div class="icon-wrp"> 
                            <i class="fas fa-university"></i> 
                         </div> 
                         <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Banking Services </div> 
                         
                    </a> 
                </li> 
            <li class="cat"> 
                <a href="#"> 
                        <div class="icon-wrp"> 
                            <i class="fa fa-desktop"></i> 
                        </div> 
                        <div class="cat-text" style="font-family: 'Bree Serif', serif;"> Front Desk </div>
                         
                    </a> 
                </li> 

            </ul> 
          </marquee>

        </div> 
    </div>
</div>

    <section class="main-content"> 
      <div class="container-fluid"> 
        <div class="row"> 
          <div class="col-xl-9 col-lg-12 col-md-9 col-sm-12 py-3"> 
            <div class="premium-div ">
            <div class="row">
            <div class="col-md-12 job-header-title text-center">
             <i class="far fa-gem"  style='color:#ed7913' ></i> <span style='color: #ed7913'><b>FEATURED</b></span><b> JOBS </b>

              </div>

               </div>
               <div class="seperator justify-content">
               </div>
               <div class="row">


                 <?php
              include 'openconnection.php';
              $query="SELECT * FROM add_job order by date_added desc limit 3";
              $result=$conn->query($query);
              
              include 'closeconnection.php';
              while($rows = $result->fetch_assoc())
              {
              ?>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 detail-div mb-3">
                  <div class="detail-wrp border p-2">
                    <div class="row">
                      <div class="col-3 col-md-3">
                        <div class="com-logo">
                     <img src="admin/logo/<?php echo $rows['filelogo']; ?>" height="70" width="80" style="margin-left: -25%; padding-right: 12%;" alt="Surejob">   
                    </div>
                      </div>
                      <div class="col-9 col-md-9 d-text px-3 py-2">
                        <span class="marker-icon" style="font-size:10px; color: #ed7913; float: right;" >
                          <i class="far fa-gem"></i>
                        </span>
                        <h6 class "mb-1">
                          <b><a href="#"><?php echo $rows['jobtitle'];?></a></b>
                        </h6>
                        <a href="<?php echo $rows['companyurl'];?>" class="d-job" title="Infotech Services" target="_blank"><?php echo $rows['companyname'];?></a>
                        <br>
                        <br>
                        <a href="" class="time-left">Date added: <?php echo $rows['date_added'];?></a>
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


                    <div class="col-md-3 py-1 " style="margin-top: 70px; border: 3px solid #D8D8D8; text-align: center; " >
                      
                       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/4.png" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/5.png" alt="fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/6.png" alt="sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/7.png" alt="seventh slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h6 class="mb-1 pt-3" style="font-family: 'Bree Serif', serif;"> Why Choose Us ? </h6>
<h7 style="font-family: 'Bree Serif', serif;
font-family: 'Frank Ruhl Libre', serif;">We are a prominent executive search & selection company, providing a wide range of recruitment solutions for various human resource requirements. We are offerin one stop solution for HR requirements like staffing & executive search. services for all Nepal.</h7>
                <hr>
                  <div class="fb-page" data-href="https://www.facebook.com/surejob.com.np/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/surejob.com.np/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/surejob.com.np/">Sure Job.com</a></blockquote></div>
                    </div>


          </div>
      </div>
    </section>

  <?php
  include 'footer.php';

  ?>
