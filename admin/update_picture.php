<?php 
include("top.php");

include("sidebar.php");

$result1 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '1'")
     or die("Query failed");
 $row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '2'")
     or die("Query failed");
 $row2 = mysqli_fetch_array($result2);

 $result3 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '3'")
     or die("Query failed");
 $row3 = mysqli_fetch_array($result3);

?>


    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Update Pictures</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>About Us/Services</li>
              <li><i class="fa fa-files-o"></i>Update Pictures</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
         <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Home Page Slider 1</b> </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row1["pictures_name"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="picture_code?id=1" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Home Page Slider 2</b></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row2["pictures_name"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="picture_code?id=2" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><b>Home Page Slider 3</b></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row3["pictures_name"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="picture_code?id=3" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

           
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>



</body>

</html>
