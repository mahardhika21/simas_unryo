<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title><?php echo $title; ?></title>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/bower_components/bootstrap/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo $url .'/assets/pages/waves/css/waves.min.css'; ?>" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/icon/feather/css/feather.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/icon/themify-icons/themify-icons.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/icon/icofont/css/icofont.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/icon/font-awesome/css/font-awesome.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/css/style.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/css/pages.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $url .'/assets/css/widget.css'; ?>">
</head>

<body>
<?php // echo '<pre>'.print_r($data, true) .'</pre>'; ?>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        <!-- header web -->
          <?php echo $part['header']; ?>

        <!-- end header -->
        <div class="pcoded-main-container">
<div class="pcoded-wrapper">
                <?php echo $part['sidebar']; ?>
        <!-- end sidebar -->
                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-user bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Profile</h5>
                                            <span>Update Profile User</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index-2.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Beranda</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                     
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-sm-8 col-offset-sm-2">
                                                <div class="card">
                                           
                                            <div class="card-block ">
                                                            <div class="card-header">
                                                            <h5>Profile User Admin</h5>
                                                            </div>
                                                           

                                                           <!--  <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Capitalize Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-capitalize" placeholder=".form-control-capitalize">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Uppercase Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-uppercase" placeholder=".form-control-uppercase">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Lowercase Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-lowercase" placeholder=".form-control-lowercase">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Varient Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-variant" placeholder=".form-control-variant">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Left-Align Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-left" placeholder=".form-control-left">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Center-Align Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-center" placeholder=".form-control-center">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Right-Align Text</label>
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-right" placeholder=".form-control-right">
                                                            </div>
                                                            </div> -->
                                                            <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label"></label>
                                                            <div class="col-sm-7">
                                                            <!-- <button class="btn btn-info btn-sm" id="update_profile">Update Profile</button> -->
                                                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#update-profile">Update Profile</button>
                                                            <button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#update-password">Update Password</button>
                                                            </div>
                                                            </div>
                                                           
                                                            </div>
                                                           
                                                   
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                        </div> 

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>
                </div>
            </div>
        </div>
 



    <script type="text/javascript" src="<?php echo $url .'/bower_components/jquery/js/jquery.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/jquery-ui/js/jquery-ui.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/popper.js/js/popper.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo $url .'/assets/pages/waves/js/waves.min.js'; ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/jquery-slimscroll/js/jquery.slimscroll.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/modernizr/js/modernizr.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/modernizr/js/css-scrollbars.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/bower_components/classie/js/classie.html'; ?>"></script>
    <script src="<?php echo $url .'/assets/js/pcoded.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/vertical/vertical-layout.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/jquery.mCustomScrollbar.concat.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/jquery.mousewheel.min.js'; ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $url .'/assets/js/script.js'; ?>"></script>
    <script type="text/javascript">
    


    </script>
</body>
</html>