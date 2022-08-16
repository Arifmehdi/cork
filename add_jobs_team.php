<!DOCTYPE html>

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
                                          <h4>Add Jobs Team</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="widget-content widget-content-area">
                                  <form action="app/jobs/jobs_team/insert_jobs_team.php" method="post" enctype="multipart/form-data">
                                  <input type="hidden" class="form-control" id="ctgname" name="id" value="">
                                    <div class="form-group md-4">
                                        <label for="ctgname">Team Name</label>
                                        <input type="text" class="form-control" id="ctgname" name="team_name" value="">
                                    </div>
                                    <div class="form-group md-4">
                                        <label for="ctgname">Team Desscription</label>
                                      <textarea class="form-control" name="team_desc" rows="8" cols="80"></textarea>
                                    </div>
                                    <div class="form-group md-4">
                                        <label for="ctgname">Team Icon</label>
                                      <input type="file" class="form-control" name="team_icon" >
                                    </div>
                                    <div class="form-row mb-4">

                                        <div class="form-group col-md-6">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" value="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="metatitle">Meta Title</label>
                                            <input type="text" class="form-control" id="metatitle" name="meta_title" value="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="metatag">Meta tag</label>
                                            <input type="text" class="form-control" id="metatag" name="meta_tag" value="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="metades">Meta Desscription</label>
                                            <input type="text" class="form-control" id="metades" name="meta_desc" value="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="ogimg">Og img</label>
                                            <input type="file" class="form-control" id="ogimg" name="og_img">
                                        </div>
                                      </div>


                                      <button type="submit" class="btn btn-primary mt-3">Add Team</button>
                                  </form>
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
