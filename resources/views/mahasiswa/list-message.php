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
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
             <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-moon.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
        </div>
      </section>
      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card income text-center">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="number">Zuki</div><strong class="text-primary">Penghuni Kamar</strong>
                <p>nomor Kamar : 123</p>
                <p>batas akir swa : 2019-09-12</p>
              </div>
            </div>
            <div class="col-lg-8">
              <!-- Monthly Usage-->
              <div class="card data-usage">
                <h2 class="display h4">Lokasi</h2>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-12">
                     <div class="col-md-12"><iframe width="100%" height="400" src="https://maps.google.com/maps?q=New%20York&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <!-- Recent Updates Widget          -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">News Updates / Agenda</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled">
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date">24<span class="month">Jan</span></div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date">24<span class="month">Jan</span></div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date">24<span class="month">Jan</span></div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date">24<span class="month">Jan</span></div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date">24<span class="month">Jan</span></div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>Lorem ipsum dolor sit amet.</strong>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                      </div>
                      <div class="right-col text-right">
                        <div class="update-date">24<span class="month">Jan</span></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
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