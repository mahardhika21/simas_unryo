<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
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
  
  </head>
  <body>
    <!-- Side Navbar -->
    <?php  echo $part['sidebar']; ?>

    <!-- end side navbar -->
    <div class="page">
      <!-- navbar header-->
        <?php echo $part['header']; ?>
      <!-- navbar header-->
      <?php // echo '<pre>' .print_r($data, true).'</pre>'; ?>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding" style="display: none;">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6 card border">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase"> <?php //echo $curency->format_rupiah(321312); ?> Penghuni Asrama </strong><span></span>
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
      <section class="statistics" style="margin-top: 35px;">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <!-- Income-->
              <div class="card income text-center">
               
                <div class="col-lg-12 p-3">
                  <div class=" ">
                    <div class=" p-4">
                      <div class="row">
                        <div class="col-sm-12">
                           <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h3 class="panel-title text-center">Detail Profile Admin</h3>
                                </div>
                                <div class="panel-body">
                                  <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" style="max-height: 120px;" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_640.png" class="img-circle img-responsive"> </div>

                                    <div class=" col-md-9 col-lg-9 "> 
                                      <table class="table table-user-information" style=" text-align: left;">
                                        <tbody>
                                          <tr>
                                            <td width="130px">Username </td>
                                            <td><?php echo $data['username']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Nama </td>
                                            <td><?php echo $data['nama']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>E-mail </td>
                                            <td><?php  echo $data['email']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Phone </td>
                                            <td><?php echo $data['phone']; ?></td>
                                          </tr>
                                          
                                             <tr>
                                            <td>Level</td>
                                            <td> <?php echo $data['level'] .'('.$data['access_lev'].')'; ?></td>
                                          </tr>
                                        
                                         
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                 <div class="panel-footer">   
                       <a style="display: none;" class="btn btn-info" data-toggle="modal" data-target="#proIMG">Upload Foto Profile</a> <a style="display: none;" class="btn btn-warning" data-toggle="modal" data-target="#logoIMG">Upload Logo Agent</a>
                </div>
            
          </div>
                        </div>
                        <div class="col-md-12">
                             <a class="btn btn-primary mt-3" href="#" id="update_pro">Update Profile</a>
                             <a class="btn btn-warning mt-3" href="#" id="update_password">Reset Password</a>
                        </div>
                        <?php //echo '<pre>'.print_r($data, true) .'</pre>'; ?>

                     
                    </div>
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


    <div class="modal fade" id="modal_profile" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
         <form id="form1" accept-charset="UTF-8" method="post" action="<?php echo $url.'/admin/update_profile'; ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Profile Admin</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                 
                </div>
                <div class="card-body">
                 
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" placeholder="Nama Admin" class="form-control" value="<?php echo $data['nama']; ?>" id="nama_admin">
                    </div>
                    <div class="form-group">       
                      <label>E-Mail</label>
                      <input type="email" placeholder="Email Admin" class="form-control" value="<?php echo $data['email']; ?>" id="email_admin">
                    </div>
                    <div class="form-group">       
                      <label>Phone</label>
                      <input type="text" placeholder="Nomor Hanphone Admin" class="form-control" value="<?php echo $data['phone']; ?>" id="phone_admin">
                    </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-info" id="btn_update_profile">Update Profile</a>
          <button hidden="" type="Submit" class="btn btn-info" >Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
         </form>
      </div>
      
    </div>
  </div>


  <div class="modal fade" id="modal_password" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
         <form id="form1" method="post" action="" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Password</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                 
                </div>
                <div class="card-body">
                 
                  <form>
                    <div class="form-group">
                      <label>Password Lama</label>
                      <input type="password" placeholder="Password Lama" id="password_old" class="form-control">
                    </div>
                    <div class="form-group">       
                      <label>Password Baru</label>
                      <input type="password" placeholder="Password baru" id="password_new" class="form-control">
                    </div>
                    <div class="form-group">       
                      <label>Ulangi Password Baru</label>
                      <input type="password" placeholder="Ulangi Password Baru" id="password_renew" class="form-control">
                    </div>
                    <div class="form-group">       
                      <input type="submit" value="Signin" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
           <button type="Submit" class="btn btn-info" hidden="" >Submit</button>
           <a class="btn btn-info" id="btn_update_password">Update Password</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
         </form>
      </div>
      
    </div>
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
    <script type="text/javascript">
      $('#update_pro').on('click', function(){
            $('#modal_profile').modal('show');
      });

      $('#update_password').on('click', function(){
            $('#modal_password').modal('show');
      });

      $('#btn_update_profile').on('click', function(){

            let profile = Object();
            profile.nama  = $('#nama_admin').val();
            profile.email = $('#email_admin').val();
            profile.phone = $('#phone_admin').val();

            console.log(profile); 
            let baseUrl = '<?php echo $url .'/admin/update_profile'; ?>'
            ajax_post_update(profile,baseUrl,"up_profile");

      });


      $('#btn_update_password').on('click', function()
      {
          let password = new Object();
              password.password_new         = $('#password_new').val();
              password.password_renew       = $('#password_renew').val();
              password.password_old         = $('#password_old').val();

              console.log(password);

              let baseUrl = '<?php echo $url .'/update_password'; ?>';
              //alert(baseUrl);
              ajax_post_update(password,baseUrl,"update_password");

      });

      function ajax_post_update(data,baseUrl,type)
      {
           $.ajax({
              url       : baseUrl,
              type      : 'POST',
              dataType  : 'JSON',
              data      : {data:data},
              success   : function(response)
              {
                        console.log(response);

                        if(response.success == "true")
                        {
                              alert(response.message);

                              window.location.reload()
                        }
                        else
                        {
                              console.log(response);
                              if(type == "up_profile")
                              {
                                  alert(response.detail.errorInfo[2])
                              }else
                              {
                                  alert(response.message)
                              }
                              
                        }

              },error   : function(response)
              {
                        console.log(response);
                        alert("proses update data gagal, kesalahan jaringan");
              }
           });
      }
    </script>
  </body>
</html>