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
                                            <h5>BAAK</h5>
                                            <span>List Baak</span>
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
                                                            <h5>List Baak</h5>
                                                             <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add-data-baak"><i class="fa fa-plus-circle" ></i>Tambah Data Baak</button>
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

    <div class="modal fade" id="add-data-baak" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Data Baak</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form class="" id="formUser"  method="post">
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                            <input type="text" required class="form-control" placeholder="input nama anda" value="" id="username" name="username">
                                                            
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nama</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="nama" name="nama">
                                                            
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">E-Mail</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                            <input type="text" class="form-control" placeholder="email anda" value="" id="email" name="email">
                                                           
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Phone Number</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                            <input type="text" class="form-control" placeholder="Phone Number Anda" value="" id="phone" name="phone">
                                                           
                                                            </div>
                                                            </div>
                                                            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_insert_data">Update Data</button>
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
    <script type="text/javascript">
        $(function(){
            var baseUrl = '<?php echo $url; ?>';

            var table = $('#table-baak').DataTable({
                    processing : true,
                    serverSide : true,
                    searching  : true,
                    ajax       : 'data/list_baak',
                    columns    : 
                                [
                                   {data : 'username', name : 'username'},
                                   {data : 'username', name : 'username'},
                                   {data : 'nama',     name : 'name'},
                                   {data : 'phone',    name : 'phone'},
                                   {data : 'email',    name : 'email'},
                                   {render : function(data, type, full, meta)
                                    {
                                        return  " <button id='btnDelete' href='ss' data-id="+full.username+" class='btn btn-danger btnDetails'>Delete Data</button>";
                                    }},
                                ]
            });

            // fungsi untuk menambah nomor indexing \\
            table.on('order.dt search.dt',function(){
                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                });
            }).draw();

           // fungsi delete di datatable
           $('#table-baak').on('click','[id=btnDelete]', function(){
                let uname = $(this).data('id');

                cnf = confirm("Apakah Anda Yakin Menghapus Data Mahasiswa Dengan Nim "+ uname +" ?");
                if(cnf)
                {
                    $.ajax({
                            url      : baseUrl + '/admin/delete_data_user',
                            type     : 'POST',
                            dataType : 'JSON',
                            data     : {username:uname}, 
                            success  : function(resp)
                            {
                                    if(resp.message == 'true')
                                    {
                                        alert(resp.message);
                                        window.location.reload();
                                    }
                                    else
                                    {
                                        alert(resp.message);
                                        window.location.reload();
                                    }
                            },error : function(resp)
                            {
                                  alert('Kesalahan, jaringan');
                            }
                    });
                }
           });

        });

        function ajx_insert_data()
        {
            let baseUrl = '<?php echo $url; ?>';
            let obj          = new Object();
                obj.nama        = $('#nama').val();
                obj.username    = $('#username').val();
                obj.email       = $('#email').val();
                obj.phone       = $('#phone').val();
                obj.level       = 'baak';
                obj.access_lev  = 'baak';
                console.log(obj);
                $.ajax({
                    url      : baseUrl +'/admin/insert_data/user',
                    type     : 'POST',
                    dataType : 'JSON',
                    data     : {datum:obj},
                    success  : function(respond)
                    {
                        if(respond.success == 'true')
                        {
                            window.location.reload();
                        }
                        else
                        {
                            alert(respond.message);
                            window.location.reload();
                        }

                    },error : function(respond)
                    {
                        alert("Kesalahn jaringan");
                    }
                });
        }


      $(document).ready(function(){
       validate_user();

       $('#btn_insert_data').on('click', function(){
            let vd = $('#formUser').valid();
            console.log(vd);
            if(vd === true)
            {
                // alert('true');
                ajx_insert_data();
            }
       });

        });
        
       
    </script>
</body>
</html>
