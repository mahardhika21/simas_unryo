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
                                            <h5>Data</h5>
                                            <span>List Mahasiswa</span>
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
                                                            <h5>List Mahasiswa</h5>
                                                             <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add-data-mahasiswa"><i class="fa fa-plus-circle" ></i>Tambah Data Mahasiswa</button>
                                                            </div>
                                                           
                                                            <table class="table" id="table-mahasiswa">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nim</th>
                                                                        <th>Nama</th>
                                                                        <th>Prod</th>
                                                                        <th>Fakultas</th>
                                                                        <th>Tahun Masuk</th>
                                                                        <th>Option</th>
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

    <div class="modal fade" id="add-data-mahasiswa" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body"> 
                    <div class="container">
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">NIM</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                              <input type="text" class="form-control" placeholder="input nim mahasiswa" value="" id="nim_mhs">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nama</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="nama_mhs">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Fakultas</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="fakultas_mhs">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Prodi</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="prodi_mhs">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tahun Masuk</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="tahun masuk" value="" id="tahun_masuk_mhs">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Provinsi</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="provinsi_mhs">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Kabupaten</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="kabupaten">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Alamat</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                           <textarea type="text" class="form-control" placeholder="input nama anda" value="" id="alamat_mhs"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">E-Mail</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="input nama anda" value="" id="email_mhs">
                                                            </div>
                                                        </div>

                                                            
                     </div>
                                                            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_update_profile">Update Data</button>
        </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="detail-data-mahasiswa" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Detail Data Mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="container">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                              <img id="img_mhs" style="max-height: 150px;" src="https://www.stickpng.com/assets/images/585e4bf3cb11b227491c339a.png" class="rounded mx-auto d-block" alt="Cinque Terre">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">NIM</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                              <p id="nim"></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nama</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="nama"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Fakultas</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="fakultas"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Prodi</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="prodi"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tahun Masuk</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="tahun_masuk"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Provinsi</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="provinsi"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Kabupaten</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="Kabupaten"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Alamat</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="alamat"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">E-Mail</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="email"></strong>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Phone Number</label>
                                                            <di class="col-sm-1">:</di>
                                                            <div class="col-sm-7">
                                                            <strong id="phone"></strong>
                                                            </div>
                                                        </div>

                                                            
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
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
    <script type="text/javascript" src="<?php ehco $url .'/assets/js/datum.js'; ?>"></script>
     <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(function(){

            var baseUrl = '<?php $url; ?>';

                $('#table-mahasiswa').DataTable({
                    processing : true,
                    ServerSide : true,
                    searching  : true,
                    language   : {
                                searchPlaceholder: "Search Data Mahasiswa"
                                 },
                    oSearch      : {sSearch: "1"},
                    ajax       : 'data/list_mahasiswa',
                    columns : [
                            //render: function (data, type)
                            // {
                            //return meta.row + meta.settings._iDisplayStart + 1;
                            //  },
                            {data : 'nim', name : 'nim'},
                            {data : 'nama', name : 'nama'},
                            {data : 'prodi', name : 'prodi'},
                            {data : 'fakultas', name : 'fakultas'},
                            {data : 'tahun_masuk', name : 'tahun_masuk'},
                            {render : function(data, type, full, meta)
                                {
                                    console.log(full);
                                     return  "<button id='btnDetails' href='ss' data-id="+full.nim+" class='btn btn-info btnDetails'>Detail</button>"+" <button id='btnDelete' href='ss' data-id="+full.nim+" class='btn btn-danger btnDetails'>Delet Data</button>";
                                }},
                        ],



                });

           

            $('#table-mahasiswa tbody').on('click', '[id=btnDetails]', function () {
                    let nim = $(this).data('id');
                    

                   // window.location.href= baseUrl +"/admin/detail_mahasiswa/"+nim;

                    $.ajax({
                                url         : baseUrl +"/admin/get_data_detail/mahasiswa",
                                type        : "POST",
                                dataType    : "JSON",
                                data        : {nim:nim},
                                success : function(response)
                                {
                                       console.log(response);
                                       $('#detail-data-mahasiswa').modal('show');
                                      // alert('success');

                                       if(response.success === "true")
                                       {

                                            $('#nim').html(response.data[0].nim);
                                            $('#nama').html(response.data[0].nama);
                                            $('#fakultas').html(response.data[0].fakultas);
                                            $('#prodi').html(response.data[0].prodi);
                                            $('#tahun_masuk').html(response.data[0].tahun_masuk);
                                            $('#provinsi').html(response.data[0].provinsi);
                                            $('#kabupaten').html(response.data[0].kabupaten);
                                            $('#email').html(response.data[0].email);
                                            $('#phone').html(response.data[0].phone);
                                            // alert(response.data[0].nim);

                                            if(response.data[0].img_profile != "")
                                            {
                                                $('#img_mhs').attr('src',response.data[0].img_profile);
                                            }
                                       }
                                       else
                                       {
                                            alert(response.message);
                                       }
                                },error : function(response)
                                {
                                    alert("kesalahan jaringan");
                                }

                           });
            });

            $('#table-mahasiswa tbody').on('click','[id=btnDelete]', function(){
                let nim = $(this).data('id');
                let cnf = confirm("Apakah Anda Yakin Menghapus Data Mahasiswa Dengan Nim"+ nim +" ?");
                if(cnf)
                {
                    $.ajax({
                        url  : baseUrl +"/admin/delete_mahasiswa",
                        type : "POST",
                        dataType : "text",
                        data     : {id:nim},
                        success  : function(response)
                        {
                            if(response === "ok")
                            {
                                alert("Proses Delete Data Mahasiswa dengan Nim/Username "+nim+" Berhasil");
                                window.location.reload();
                            }
                            else
                            {
                                alert("Proses Delete Data Mahasiswa dengan Nim/Username "+nim+" Gagal message("+response+")");
                            }
                        }, error : function(response)
                        {
                            alert("Proses Delete Data Mahasiswa dengan Nim/Username "+nim+" Gagal, Periksa Jaringan Anda");
                        }
                    });
                }
            });
        });


 // $('.btnDetails').on('click', function(){
 //                let id = $(this).data('id');
 //                alert(id);
 //            });

    </script>
</body>
</html>