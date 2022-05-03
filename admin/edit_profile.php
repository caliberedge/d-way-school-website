<?php 
include("top.php");
?>
    <!--header end-->

    <!--sidebar start-->
<?php
include("sidebar.php");
?>    <!--sidebar end-->


<?php

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM admin WHERE id= '$ID'");
  $row= mysqli_fetch_array($result);


if(isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];


  $query = "UPDATE admin SET fname='$firstname',lname='$lastname',username='$username',email='$email',phone='$phone' where id = '$ID'";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Data Successfully Updated")
            window.location.assign("profile.php")
               </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  }
  }
?>



    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i>Update Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $row['fname']. " " .$row['lname'] ?></h4>
                  <div class="follow-ava">
                    <img  alt="" src="img/loggo.jpg" width="50" height="40" alt="image">
                  </div>
                  <h6>Administrator</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <h6>
                                    <span><h3><i class="icon_clock_alt"></i><b><?php echo date("H:i:s");?></b></h3></span>
                                    <span><h4><i class="icon_calendar"></i><b><?php echo date("d-m-Y");?></b></h4></span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li>
                    <a href="profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="active">
                    <a>
                                   <i class="icon-envelope"></i>
                                        Edit Profile
                                    </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <!-- profile -->
                 
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1><b>Update Profile</b></h1>
                        <form class="form-horizontal" role="form" method="post">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" name="firstname" value="<?php echo $row['fname']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" name="lastname" value="<?php echo $row['lname']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-4">
                              <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" name="update" class="btn btn-primary">Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
