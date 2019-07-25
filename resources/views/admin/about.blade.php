<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>{{@$title}}</title>
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

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
   
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
          <?php // echo $part['header']; ?>
          {!!$part['header']!!}
        <!-- end header -->
        <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
                <?php //echo $part['sidebar']; ?>
                {!!$part['sidebar']!!}
        <!-- end sidebar -->
                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-user bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>About</h5>
                                            <span>Update Data </span>
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
                                                            <h5>About Data</h5>
                                                            <?php 
                                                              $msg = Session::get('msg');
                                                              if($about->count() > 0)
                                                              {
                                                                
                                                                $body = $about[0]->body;
                                                                $id   = $about[0]->id_extra;
                                                                $type = 'update';
                                                              }
                                                              else
                                                              {
                                                                 $body = "";
                                                                 $id   = 13131;
                                                                 $type = 'insert';
                                                              } 

                                                              ?>
                                                            
                                                            </div>
                                                            <div class="card-block">
                                                              <?php if(!empty($msg)){  ?>
                                                               <div class="alert alert-{{@$msg['code']}}">
                                                                    <strong>{{@$msg['status']}}</strong> {{ @$msg['message']}}
                                                                </div>
                                                                <?php } ?>
                                                               <form action="{{@$url.'/admin/about_crud/'.@$type}}" method="POST">       
                                                                  <input type="hidden" name="id" value="{{@$id}}">
                                                                  <textarea  class="summernote" name="body">
                                                                            {{@$body}}
                                                                  </textarea>
                                                                  <br>
                                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                                               </form>            
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
    <script>
        $(document).ready(function(){
            $('.summernote').summernote({
               height: 300, 
            });
        });
   </script>
</body>
</html>