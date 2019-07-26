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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet"> 

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
                                            <h5>NEWS (BERITA)</h5>
                                            <span>List News</span>
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

                                                <?php if ($errors->any()){ ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors->all() as $error){ ?>
                <li><?php echo $error ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>
                                                <?php  $msg = Session::get('msg'); ?>
                                                             <?php if(!empty($msg)){  ?>
                                                               <div class="alert alert-<?php echo $msg['code']; ?>">
                                                                    <strong><?php echo $msg['status']; ?></strong> <?php echo $msg['message']; ?>
                                                                </div>
                                                                <?php } ?>

                                                            <div class="card-header">
                                                            <h5>List Berita (news)</h5>
                                                             <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add-data-news"><i class="fa fa-plus-circle" ></i>Tambah Data Berita</button>
                                                            </div>
                                                            
                                                            
                                                      <table class="table" id="table-news">
                                                          <thead>
                                                              <tr>
                                                                  <th>#</th>
                                                                  <th>Judul</th>
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

    <div class="modal fade" id="add-data-news" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Data News (BERITA)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form class="" action="<?php echo $url .'/admin/news_crud/insert'; ?>"  method="POST">
                                                            <div class="form-group row">
                                                            <label class="col-sm-8 col-form-label">Judul</label>
                                                            <div class="col-sm-12">
                                                            <input type="text" required class="form-control" placeholder="input nama anda" value="" id="title" name="nama">    
                                                            </div>
                                                            </div>
                                                             <div class="form-group row">
                                                            <label class="col-sm-8 col-form-label">Berita</label>
                                                            <div class="col-sm-12">
                                                            <textarea class="form-control summernote" name="body">
                                                            </textarea>
                                                            </div>
                                                            </div>
                                                            
                                                          
                                                            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="">Insert Berita</button>
        </div>
        </form>
        </div>
        </div>
    </div>
  

        <div class="modal fade" id="update-data-news" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Update Data News (BERITA)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form class="" action="<?php echo $url .'/admin/news_crud/insert'; ?>"  method="POST">
                                                            <div class="form-group row">
                                                            <label class="col-sm-8 col-form-label">Judul</label>
                                                            <div class="col-sm-12">
                                                            <input type="text" required class="form-control" placeholder="input nama anda" value="" id="title" name="nama">    
                                                            </div>
                                                            </div>
                                                             <div class="form-group row">
                                                            <label class="col-sm-8 col-form-label">Berita</label>
                                                            <div class="col-sm-12">
                                                            <textarea class="form-control summernote" name="body">
                                                            </textarea>
                                                            </div>
                                                            </div>
                                                            
                                                          
                                                            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="">Update Berita</button>
        </div>
        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script type="text/javascript">
       $(function(){
        var baseUrl = "<?php echo $url; ?>";

        var table  = $('#table-news').DataTable({
            processing : true,
            serverside : true,
            seraching  : true,
            ajax       : 'data/list_news',
            columns    : 
                            [
                                {data : 'id_extra', nama : 'id_extra'},
                                {data : 'nama',    nama : 'nama' },
                                {render : function(data, type, full, meta){
                                      return  "<button id='btnDetails' href='ss' data-id="+full.id_extra+" class='btn btn-info btnDetails'>Update Data</button>"+" <button id='btnDelete' href='ss' data-id="+full.id_extra+" class='btn btn-danger btnDetails'>Delete Data</button>";
                                } }
                            ]

        });

         table.on('order.dt search.dt',function(){
                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                });
            }).draw();

       });

       // delete
       $('#table-news').on('click','[id=btnDelete]', function(){
            let id = $(this).data('id');

            // alert(id);
            let conf = confirm("Apakah anda yakin akan menghapus berita ini ?");

            if(conf)
            {
                 ajax_func_crud(id, 'delete');
            }
           
       });

       // get view
       $('#table-news').on('click','[id=btnDetails]', function(){
            let id = $(this).data('id');

           // alert(id);
            
            ajax_func_crud(id, 'get');
       });


       function ajax_func_crud(id, type)
       {
            let baseUrl = '<?php echo $url; ?>';
             $.ajax({
                    url         : baseUrl +'/admin/news_crud/'+type,
                    type        : 'POST',
                    typeData    : 'json',
                    data        : {id:id},
                    success     : function(resp)
                    {
                            if(type === 'delete')
                            {
                                if(resp.status === 'true')
                                {
                                    alert(resp.message);
                                    window.location.reload();
                                }
                                else
                                {
                                    alert(resp.message);
                                }
                            }
                            else if(type === 'get')
                            {
                                $('#update-data-news').modal('show');
                            }
                            else
                            {
                                alert(resp.message);
                            }
                    },
                error          : function(resp)
                {
                            alert('error, periksa jaringan/koneksi anda');
                }
            });
       }

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.summernote').summernote({
               height: 300, 
            });
        });
    </script>
</body>
</html>
