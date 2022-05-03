<?php

include('header/header.php');
include('header/main_menu.php');
?>
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/about/h5.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Admission Form</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Job Apply Form -->



    <div class="row">
          <div class="col-md-8 col-md-push-3">
<br><br>
    <h3 align="center">ADMISSION!!!</h3>
    <p align="center" class="mb-20">Application forms are obtainable online and in the school premises. Qualified candidates are admitted into JSS1-2 and SS1-2.</p>
</div>
</div>
    
    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-3">
            <div class="border-1px p-30 mb-0">

               <h3 class="text-theme-colored mt-0 pt-5">Apply Now</h3>
              <hr>
              <p>All details are necesary.</p>
              <form id="job_apply_form" name="job_apply_form" action="#" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Other Names <small>*</small></label>
                      <input name="oname" type="text" placeholder="Enter Other Name" required="" class="form-control">
                    </div>
                  </div>
                </div>  
              <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Gender <small>*</small></label>
                      <select name="form_sex" class="form-control required">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Present Class <small>*</small></label>
                      <select name="form_post" class="form-control required">
                        <option value="Finance Manager">Primary Six</option>
                        <option value="Area Manager">Primary Five</option>
                        <option value="Country Manager">Primary Four</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Present School <small>*</small></label>
                      <select name="form_sex" class="form-control required">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>School of Choice <small>*</small></label>
                      <select name="form_post" class="form-control required">
                        <option value="Finance Manager">D-Way School</option>
                        
          
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Date Of Birth <small>*</small></label>
                      <input name="form_name" type="date" placeholder="Enter Name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Other Names <small>*</small></label>
                      <input name="oname" type="text" placeholder="Enter Other Name" required="" class="form-control">
                    </div>
                  </div>
                </div>  
                <div class="form-group">
                  <label>Message <small>*</small></label>
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                </div>
                <div class="form-group">
                  <label>Attach Passport</label>
                  <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                  <small>Maximum upload file size: 80kb</small>
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">submit</button>
                </div>
              </form>
              <!-- Job Form Validation-->
              <script type="text/javascript">
                $("#job_apply_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
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