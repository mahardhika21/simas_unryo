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
<style type="text/css">
    .error 
           {
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
                                            <h5>Data</h5>
                                            <span>List Room</span>
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
                                                            <h5>List Data Kamar</h5>
                                                             <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add-data-mahasiswa"><i class="fa fa-plus-circle" ></i>Tambah Data Kamar</button>
                                                            </div>
                                                           
                                                            <table class="table" id="table-mahasiswa">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Nomor Kamar</th>
                                                                        <th>Lantai Kamar</th>
                                                                        <th>Harga /Bulan</th>
                                                                        <th>Status Kamar</th>
                                                                        <th>Foto Kamar</th>
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
        <h4 class="modal-title">Tambah Data Kamar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body"> 
                    <div class="container">
                        <form  method="post" id="room_inst" action="<?php echo $url .'/admin/room_crud/insert/'; ?>"  enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nomor Kamar</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                              <input type="text" class="form-control" placeholder="Nomor Kamar" value="" id="nomor_kamar" name="nomor_kamar">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Lantai Kamar</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="Lantai Kamar" value="" name="lantai_kamar" id="lantai_kamar">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Harga Perbulan</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                            <input type="text" class="form-control" placeholder="Harga Kamar" value="" name="harga_perbulan" id="harga_perbulan">
                                                            </div>
                                                        </div>
                                                         <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Foto Kamar</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                            <input type="file" id="roomImg" name="roomImg"  accept="image/*" onchange="loadFile(event)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label"></label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                           <img style="max-height: 200px;" id="output"/>
                                                            </div>
                                                        </div>  
                        </form>
                     </div>
                                                            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="btn_insert_room">Insert Data</button>
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
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                              <p id="nim"></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Nama</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-7">
                                                            <strong id="nama"></strong>
                                                            </div>
                                                        </div>
                                                      
                                                         <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">File : Png/Jpg/Jpeg</label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                            <input type="file" name="slide" id="fileSLide" accept="image/*" onchange="loadFile2(event)">
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label"></label>
                                                            <div class="col-sm-1">:</div>
                                                            <div class="col-sm-9">
                                                           <img style="max-height: 200px;" id="output2"/>
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
    <script src="<?php echo $url .'/assets/js/pcoded.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/vertical/vertical-layout.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/jquery.mCustomScrollbar.concat.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo $url .'/assets/js/jquery.mousewheel.min.js'; ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $url .'/assets/js/script.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo $url .'/assets/js/datum.js'; ?>"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="<?php echo $url .'/assets/js/config-jqvalidate.js'; ?>"></script>
    <script type="text/javascript">
        $(function(){

            var baseUrl = '<?php $url; ?>';

             var table =  $('#table-mahasiswa').DataTable({
                    processing : true,
                    ServerSide : true,
                    searching  : true,
                    language   : {
                                searchPlaceholder: "Search Data Mahasiswa"
                                 },
                    oSearch      : {sSearch: "1"},
                    ajax       : 'data/list_room/all',
                    columns : [
                            
                            {data : 'id_kamar', name : 'id_kamar'},
                            {data : 'nomor_kamar', name : 'nomor_kamar'},
                            {data : 'lantai_kamar', name : 'lantai_kamar'},
                            {data : 'harga_perbulan', name : 'harga_perbulan'},
                            {data : 'status_kamar', name : 'status_kamar'},
                           // {data : 'foto_kamar', name : 'foto_kamar'},
                            {reader : function(data, type, full, meta){
                                return "<img class='img' height='120px' style=' margin-left: auto; margin-right: auto;' src="+ baseUrl+'/'+full.url+'/'+ full.kamar+" /> ";
                            }},
                            {render : function(data, type, full, meta)
                                {
                                  //  console.log(full);
                                     return  "<button id='btnDetails' href='ss' data-id="+full.nim+" class='btn btn-info btnDetails'>Detail</button>"+" <button id='btnDelete' href='ss' data-id="+full.nim+" class='btn btn-danger btnDetails'>Delet Data</button>";
                                }},
                        ],



                });

           

            $('#table-mahasiswa tbody').on('click', '[id=btnDetails]', function () {
                    
                    let data = table.row($(this).parents('tr')).data();
                   
                    console.log(data['nim']);
                    let nim = data['nim'];
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
                                            $('#prodi2').html(response.data[0].prodi);
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
                let cnf = confirm("Apakah Anda Yakin Menghapus Data Mahasiswa Dengan Nim "+ nim +" ?");
                if(cnf)
                {
                    $.ajax({
                        url  : baseUrl +"/admin/delete_mahasiswa",
                        type : "POST",
                        dataType : "JSON",
                        data     : {id:nim},
                        success  : function(response)
                        {
                            if(response.success === "true")
                            {
                                alert(response.message);
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


    $(document).ready(function(){
          validate_inst_room();

         $('#btn_insert_room').on('click', function(){
            let vd = $('#room_inst').valid();
            console.log(vd);
            if(vd === true)
            {
               alert('true ajax');
               $('#room_inst').submit();
               
            }
          });
        
    });

    var loadFile = function(event) 
    {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFile2 = function(event)
    {
        var output = document.getElementById('output2');
        output.src = URL.createObjectURL(event.target.files[0]);
    }


    function validate_inst_room()
        {
                let vmhs = $('#room_inst').validate({
                  rules : {
                        nomor_kamar   :{
                                            required       : true,
                                            minlength      : 2,
                                      },
                        lantai_kamar  :{
                                            required       : true,
                                            minlength      : 1,

                                        },
                        harga_perbulan  : {
                                            required : true, 
                                            minlength : 3,
                                            number    : true,
                                          },

                    },
                    messages : {
                        nomor_kamar : {
                                        required       : "Nomor kamar Tidak boleh dikosongkan",
                                        minlength      : "minmal panjang nomor kamar 5 karakter",
                                      },
                        lantai_kamar : {
                                            required       : "nama Tidak boleh dikosongkan",
                                            minlength      : "minmal panjang nama 3 karakter",
                                        },
                       
                        harga_perbulan : {
                                    required  : "Harga Perbulan tidak boleh dikosongkan",
                                    minlength : "minimal panjang 3 karakte",
                                    number    : "Harga Perbulan harus berupa angka 0-9",
                                },       

                    },
                    errorElement: "em",
                    errorPlacement: function ( error, element ) {
                        // Add the `help-block` class to the error element
                        error.addClass( "help-block" );

                        // Add `has-feedback` class to the parent div.form-group
                        // in order to add icons to inputs
                        element.parents( ".col-sm-9" ).addClass( "has-feedback" );

                        if ( element.prop( "type" ) === "checkbox" ) {
                            error.insertAfter( element.parent( "label" ) );
                        } else {
                            error.insertAfter( element );
                        }

                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if ( !element.next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                        }
                    },
                    success: function ( label, element ) {
                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if ( !$( element ).next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                        }
                    },
                    highlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-" ).addClass( "has-error" ).removeClass( "has-success" );
                        $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                    },
                    unhighlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-9" ).addClass( "has-success" ).removeClass( "has-error" );
                        $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
                    }

                });
        }

    </script>
</body>
</html>
