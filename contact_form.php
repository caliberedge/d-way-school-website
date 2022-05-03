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
              <h2 class="title text-white">Quick Contact</h2>
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

    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-push-4">
            <div class="widget border-1px p-30">
              <h5 class="widget-title line-bottom">Contact Us</h5>
              <form id="quick_contact_form" name="quick_contact_form" class="quick-contact-form" action="#" method="post">
                <div class="form-group">
                  <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-sm mt-0" data-loading-text="Please wait...">Send Message</button>
                </div>
              </form>

              <!-- Quick Contact Form Validation-->
              <script type="text/javascript">
                $("#quick_contact_form").validate({
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