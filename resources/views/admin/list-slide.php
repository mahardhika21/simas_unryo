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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
   
</head>
<style>
p.note 
{
  font-size: 1rem;
  color: red;
}

.error {
    color : red;
}
</style>
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
                                        <i class="feather icon-users bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>SLIDE</h5>
                                            <span>List SLide</span>
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
                                            <div class="col-sm-12 col-offset-sm-2">
                                                <div class="card">
                                           
                                            <div class="card-block ">
                                                            <div class="card-header">
                                                            <h5>List Slide</h5>
                                                             <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add-data-slide"><i class="fa fa-plus-circle" ></i>Tambah Data Slide</button>
                                                            </div>
                                                            
                                                      <table class="table" id="table-baak">
                                                          <thead>
                                                              <tr>
                                                                  <th>#</th>
                                                                  <th>Username</th>
                                                                  <th>Nama</th>
                                                                  <th>Phone Number</th>
                                                                  <th>E-MAil</th>
                                                                  <th>Aksi</th>
                                                              </tr>
                                                          </thead>
                                                      </table>         
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

    <div class="modal fade" id="add-data-slide" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Data Baak</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo $url .'/admin/upload_slide/insert'; ?> " id="formSlide"  method="POST" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                            <input type="file" name="slide" id="fileSLide" accept="image/*" onchange="loadFile(event)">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nama</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                           <img id="output"/>
                                                            </div>
                                                            </div>  
                                                            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_upload_img_data">Insert Slide Data</button>
        </div>
        </form>
        </div>
        </div>
    </div>

    <div class="modal fade" id="slide-preview" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Data Baak</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form class="" id="formSlide"  method="post">
                                                          
             </form>
                                                            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_insert_data">Update Data</button>
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

    <script src="<?php echo $url .'/assets/js/pcoded.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/vertical/vertical-layout.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/jquery.mCustomScrollbar.concat.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/jquery.mousewheel.min.js'; ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $url .'/assets/js/script.js'; ?>"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="<?php echo $url .'/assets/js/config-jqvalidate.js'; ?>"></script>
    <script type="text/javascript">
        var baseUrl = '<?php echo $url; ?>';
        
       
    </script>
    <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };

  $('#btn_upload_img').on('click', function(){
ajax_upload_slide();
  });


  function ajax_upload_slide()
  {
        let img = $('#fileSLide').prop('files')[0];
        let fm = new FormData();
        console.log(img);
        console.log(fm);
        $.ajax({
            url : baseUrl + '/admin/upload_slide',
            type : 'POST',
            dataType : 'JSON',
            cache : false,
            contentType : false,
            processData : false,
            data : {slide:img},
            success : function(resp)
            {
                alert('success');
                console.log(resp);
            }, error : function(resp)
            {
                console.log(resp);
                alert('error, kesalahn jaringan')
            }
        });
  }
</script>
</body>
</html>
