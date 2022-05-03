<?php

include('header/header.php');
include('header/main_menu.php');



$result7 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '5'");
 $row7 = mysqli_fetch_array($result7);

$result8 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '6'");
 $row8 = mysqli_fetch_array($result8);

 $result9 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '7'");
 $row9 = mysqli_fetch_array($result9);

  $result10 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '8'");
 $row10 = mysqli_fetch_array($result10);

$result11 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '9'");
 $row11 = mysqli_fetch_array($result11);

$result12 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '10'");
 $row12 = mysqli_fetch_array($result12);
?>
  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/about/h5.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Gallery</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
     <div class="container pt-50 pb-30">
        <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            
            <!-- Portfolio Gallery Grid -->
            <div id="grid" class="gallery-isotope grid-3 gutter clearfix">

              <!-- Portfolio Item Start -->
              <div class="gallery-item wheel">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row7['gallery'];?>">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="images/<?php echo $row7['gallery'];?>"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $row7['content'];?></h4>
          
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item wheel">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row8['gallery'];?>">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="images/<?php echo $row8['gallery'];?>"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $row8['content'];?></h4>
                    
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item wheel">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row9['gallery'];?>">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="images/<?php echo $row9['gallery'];?>"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $row9['content'];?></h4>
                    
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item oil">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row10['gallery'];?>">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="images/<?php echo $row10['gallery'];?>"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $row10['content'];?></h4>
                
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item oil">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row11['gallery'];?>">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="images/<?php echo $row11['gallery'];?>"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $row11['content'];?></h4>
                    
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item oil">
                <div class="work-gallery">
                  <div class="gallery-thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row12['gallery'];?>">
                    <div class="gallery-overlay"></div>                  
                    <div class="gallery-contect">
                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <li><a data-rel="prettyPhoto" href="images/<?php echo $row12['gallery'];?>"><i class="fa fa-arrows"></i></a></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="gallery-bottom-part text-center">
                    <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $row12['content'];?></h4>
                    
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->

              
            </div>
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
        </div>
      </div >
    </section>

  </div>
  <!-- end main-content -->
  
  <?php
include('header/footer.php');

?>