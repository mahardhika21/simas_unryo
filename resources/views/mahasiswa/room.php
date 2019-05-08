<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home || Mahasiswa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/vendor/bootstrap/css/bootstrap.min.css'; ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/vendor/font-awesome/css/font-awesome.min.css'; ?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/css/fontastic.css'; ?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/css/grasp_mobile_progress_circle-1.0.0.min.css'; ?>">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css'; ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/css/style.default.css'; ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $url .'/assets/css/custom.css'; ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <?php echo $part['sidebar']; ?>

    <!-- end side navbar -->
    <div class="page">
      <!-- navbar header-->
        <?php echo $part['header']; ?>
      <!-- navbar header-->

      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6 card border">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Penghuni Asrama </strong><span></span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6 card border">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Kamar </strong><span></span>
                  <div class="count-number">400</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 card border">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase"> kamar  Terisi</strong><span></span>
                  <div class="count-number">342</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 card border">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">kamar Kosong</strong><span>1</span>
                  <div class="count-number">123</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6 card border">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <div class="name"><strong class="text-uppercase">Harga Perkamar</strong><span></span>
                  <div class="count-number">92</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <!-- Income-->
              <div class="card income text-center">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="col-lg-12 p-3">
                  <div class=" text-center">
                    <div class=" p-4">
                      <div class="row">
                        <div class="col-md-6">
                             <div class="table-responsive">
                              <table class="table table-striped table-borderless">
                                <tbody>
                                  <tr>
                                    <th scope="row">Nama</th>
                                    <td>:</td>
                                    <td>Otto</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                        
                      <a class="btn btn-primary mt-3" href="#">Update Profile</a>
                    </div>
                  </div>
               </div>
              </div>
            </div>
           
       
          </div>
        </div>
      </section>
  
      <!-- start footer -->
      <?php echo $part['footer']; ?>
      <!-- end footer -->
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo $url .'/assets/vendor/jquery/jquery.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/vendor/popper.js/umd/popper.min.js'; ?>"> </script>
    <script src="<?php echo $url .'/assets/vendor/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/js/grasp_mobile_progress_circle-1.0.0.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/vendor/jquery.cookie/jquery.cookie.js'; ?>"> </script>
    <script src="<?php echo $url .'/assets/vendor/chart.js/Chart.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/vendor/jquery-validation/jquery.validate.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/js/charts-home.js'; ?>"></script>
    <!-- Main File-->
    <script src="<?php echo $url .'/assets/js/front.js'; ?>"></script>
  </body>
</html>