<?php
include("connection.php");
include('header/header.php');
include('header/main_menu.php');

$result0 = mysqli_query($connection,"SELECT * FROM admin");
  $row0= mysqli_fetch_array($result0);
  $adminemail= $row0['email']; 

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];

$message = stripcslashes($message);
//$message = mysqli_real_escape_string($message);



$to='$adminemail';
$subject='Message from D-WAY INTERNATIONAL SCHOOLS';
$msg="Name: ".$name."\n"."Phone: ".$phone."\n". "Address: ".$address."\n". "Message: "."\n\n".$message;
$headers="From: ".$email;

mail($to, $subject, $msg, $headers);

$sql =mysqli_query($connection, "insert into contact(name,email,phone,address,message) values('$name','$email','$phone','$address','$message')");
if($sql) {
    echo '<script type="text/javascript"> alert("Thank You; We Have Recieved Your Message, We Will Get Back to You Shortly") 
                    window.location.assign("contact_page.php")
                                </script>';
    exit();
}
else{
    echo "Submition Failed";
}
  }
  

?>




<script>
    function validateForm() {
 var z = document.forms["form"]["name"].value;
  if (z == "") {
    alert("Please Enter your Name");
    return false;
 }
  var x = document.forms["form"]["email"].value;
  if (x == "") {
    alert("Please Enter your Email Address");
    return false;
  }
  var f = document.forms["form"]["phone"].value;
  if (f == "") {
    alert("Please Enter your Phone Number");
    return false;
  }
  var t = document.forms["form"]["address"].value;
  if (t == "") {
    alert("Please Enter your Address");
    return false;
  }
  var y = document.forms["form"]["message"].value;
  if (y == "") {
    alert("Please Enter your Intended Message or Complaint");
    return false;
  }
}
</script>

  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/about/h5.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Contact Us</h2>
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

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR SCHOOL LOCATION</strong>
                    <p> <b>Main School:</b> Yidi-Arola,Apete, Ibadan <br>
                       <b> Annex:</b> 2nd Power Line, Ologuneru, Ibadan
                  </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                    <p>08023392713, 08055947584, 08073323144</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                    <p> info@d-wayschools.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
            <p class="mb-20">You can reach out to us via the contact form below, and we will get back to you as soon as possible.</p>
            <!-- Contact Form -->
            <form  name="form"  method="post" onsubmit="return validateForm()">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input name="name" class="form-control" type="text" placeholder="Enter Name" >
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="address" class="form-control required" type="text" placeholder="Enter Address">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea name="message" class="form-control required"  placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
              </div>
            </form>

           
          </div>
        </div>
      </div>
    </section>
    
 
  
  <?php
include('header/footer.php');

?>