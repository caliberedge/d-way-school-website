
<?php
include('header/header.php');
include('header/main_menu.php');

$result = mysqli_query($connection,"SELECT * FROM picture WHERE id = '1'");
$row = mysqli_fetch_array($result);

$result1 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '2'");
$row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '3'");
$row2 = mysqli_fetch_array($result2);


$result3 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '1'");
 $row3 = mysqli_fetch_array($result3);

$result4 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '2'");
 $row4 = mysqli_fetch_array($result4);

 $result5 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '3'");
 $row5 = mysqli_fetch_array($result5);

 $result6 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '4'");
 $row6 = mysqli_fetch_array($result6);


?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
        
      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/<?php echo $row['pictures_name'];?>" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/<?php echo $row['pictures_name'];?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']" 
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;"><?php echo $row0['t1'];?>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;"><?php echo $row0['s1'];?>
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white" 
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="aboutus.php">View Details</a> 
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/<?php echo $row1['pictures_name'];?>" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/<?php echo $row1['pictures_name'];?>"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                id="rs-2-layer-1"
              
                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['28']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;"><?php echo $row0['t2'];?>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                id="rs-2-layer-2"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-20']"
                data-fontsize="['48']"
                data-lineheight="['70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"><?php echo $row0['s2'];?>
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-center" 
                id="rs-2-layer-3"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['50']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-2-layer-4"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['115']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="admission_process.php">Apply Now</a> 
              </div>
            </li>

            <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/<?php echo $row2['pictures_name'];?>" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
              <!-- MAIN IMAGE -->
              <img src="images/<?php echo $row2['pictures_name'];?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                id="rs-3-layer-1"

                data-x="['right']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['64']"
                data-lineheight="['72']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;"><?php echo $row0['t3'];?>
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-3-layer-2"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['32']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;"><?php echo $row0['s3'];?> 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-right" 
                id="rs-3-layer-3"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['30']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-3-layer-4"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['95']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="admission_process.php">Apply Now</a> 
              </div>
            </li>

          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>
      <!-- end .rev_slider_wrapper -->
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>
      <!-- Slider Revolution Ends -->

    </section>

    <!-- Section: welcome -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0" data-margin-top="-150px">
            <div class="col-sm-12 col-md-6 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto" data-bg-img="images/about/h1.jpg">
                <div class="p-20">
                  <h3 class="text-white text-uppercase"> Our E–Learning Platform</h3>
                  <div class="clearfix">
                  </div>
                  <p class="text-white-f1 mt-10 lead"><?php echo $row0['text'];?></p>
                  <a href="aboutus.php" class="btn btn-default font-14 btn-theme-colored mt-10 hvr-bounce-to-left no-border">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 pl-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-img="images/about/h5.jpg">
                <div class="p-30">
                  <h3 class="text-white text-uppercase">Want to get admission Form now?</h3>
                  <p class="lead text-white-f1">Admission is in progress</p>
                  <ul class="pull-left flip hidden-sm hidden-xs">
                    <li>
                      <!-- Modal: Book Now Starts -->
                      <a href="admission_process.php" class="btn btn-default font-14 btn-theme-colored mt-10 hvr-bounce-to-left no-border">Apply for Admission</a>
                      <!-- Modal: Book Now End -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: courses -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-color-2"> Facilities</span></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-3col owl-nav-top" data-dots="true">
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row3['gallery'];?>">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>D-Way</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                  <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row3['content'];?></a></h4>
                    
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row4['gallery'];?>">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>D-Way</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row4['content'];?></a></h4>
                  
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row5['gallery'];?>">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>D-Way</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row5['content'];?></a></h4>
                    
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="images/<?php echo $row6['gallery'];?>">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>D-Way</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                      <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row6['content'];?></a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: Mission -->
    <section id="mission">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-12 col-md-12 pull-center xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
              <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">What We Represent</h2>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none"> 
                  <i class="fa fa-eye text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h3 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Vission Statement</h3>
                  <p class="text-white"><?php echo $row0['vission'];?></p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-bullseye text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h3 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Mission Statement</h3>
                  <p class="text-white"><?php echo $row0['mission'];?></p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-cog text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h3 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Core Values</h3>
                  <p class="text-white"><?php echo $row0['core'];?></p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-book text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h3 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Our Curriculum</h3>
                  <p class="text-white"><?php echo $row0['curriculum'];?></p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    
     <!-- Section: teachers -->
    

    <!-- Section: Gallery -->
    

    <!-- Section: Why Choose Us -->
    <section class="bg-lighter">
      <div class="container pt-40 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 wow fadeInRight pr-40" data-wow-duration="1s" data-wow-delay="0.3s">
            <h3 class="line-bottom mt-20 line-height-1"><span class="text-theme-color-2">FAQ</span></h3>
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span>MOTTO</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Academic and moral excellence</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span>VISION</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p><?php echo $row0['vission'];?></p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span>MISSION</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p><?php echo $row0['mission'];?></p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> OUR VALUES</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p><?php echo $row0['core'];?></p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span>SCHOOL ANTHEM</a> </div>
                  <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>D – way International Group of Schools<br>
Academic and moral excellence<br>
Taking you to the greatest height<br>
Making sure that your life is great<br>
<b>CHORUS-</b>  Great D-way Group of Schools, great<br>
&emsp;&emsp;&emsp;&emsp;&ensp;    Great D-way Group of Schools, great<br>
&emsp;&emsp;&emsp;&emsp;&ensp;	   Great D-way Group of Schools, great<br>
&emsp;&emsp;&emsp;&emsp;&ensp;	  I will never, never let you down<br>
In God we put our trust<br>
With our qualified teachers<br>
Dishing out the best of knowledge<br>
The standard will never fall
</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion16" class="" aria-expanded="true"> <span class="open-sub"></span>SCHOOL PLEDGE</a> </div>
                  <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>I pledge to D-way my school<br>
To be God fearing and law abiding<br>
And diligent in all my work<br>
To be a good ambassador of D-way<br>
Academic and moral excellence <br>
So help me God<br>
</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

   
            

  </div>
  <!-- end main-content -->
  
  
  <?php
include('header/footer.php');

?>