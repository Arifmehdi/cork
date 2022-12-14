<!DOCTYPE html>
<?php 
include "inc/database.php";
$id=$_GET['id'];
// $ed_q=$db->query("SELECT * FROM `product_category` Where id=".$_GET['id'].")"->fetch_assoc();
$ed_q=$db->query("SELECT * FROM `news_category` Where id=$id");
$raw=$ed_q->fetch_assoc();

 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
       <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
  <?php include "inc/navbar.php";?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
      <?php include "inc/sidebar.php";?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
          <div class="container">
                <div class="container">

                  <div class="row">
                      <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                          <div class="statbox widget box box-shadow">
                              <div class="widget-header">
                                  <div class="row">
                                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                          <h4>News Category</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="widget-content widget-content-area">
                                  <table class="table" style="color:white">
                                      
                                          <tr>
                                                <td style="color:white">Category Name</td>
                                                <td><?php echo $raw['category_name'] ?></td>
                                          </tr>

                                          <tr>
                                                <td style="color:white">Slug</td>
                                                <td><?php echo $raw['slug'] ?></td>
                                          </tr>

                                          <tr>
                                                <td style="color:white">Meta Title</td>
                                                <td><?php echo $raw['meta_title'] ?></td>
                                          </tr>

                                          <tr>
                                                <td style="color:white">Meta Tag</td>
                                                <td><?php echo $raw['meta_tag'] ?></td>
                                          </tr>

                                          <tr>
                                                <td style="color:white">Meta Description</td>
                                                <td><?php echo $raw['meta_desk'] ?></td>
                                          </tr>
                                          <tr>
                                                <td style="color:white">OG Image</td>
                                                <td><?php echo $raw['og_img'] ?></td>
                                        
                                        </tr>
                                            <tr>
                                                <td style="color:white">Category</td>
                                                <td><?php echo $raw['category'] ?></td>
                                            </tr>
                                      
                                  </table>
                              </div>
                          </div>
                      </div>

                  </div>





                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="assets/js/scrollspyNav.js"></script>
        <script src="plugins/select2/select2.min.js"></script>
        <script src="plugins/select2/custom-select2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>
