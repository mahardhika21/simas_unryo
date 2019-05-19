<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <title>BERANDA</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> ASRAMA MAHASISAWA</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto text-capitalize">
          <li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 card">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-moon.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with indicators</p>
                </div>
              </div>
              <div class="carousel-item "> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with indicators</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with indicators</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 Card" style="">
          <?php 
        $message = Session::get('success');
          echo '<pre>'.print_r($message, true) .'</pre>'; ?>
          <form class="" action="<?php echo $url .'/userLogin'; ?>" method="post">
            <div class="form-group"> <label>Email address</label> <input type="text" class="form-control" placeholder="masukkan  username" required="" name="username"> <small class="form-text text-muted"></small> </div>
            <div class="form-group"> <label>Password</label> <input type="password" class="form-control" placeholder="Password" name="password" required=""> </div> <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <form class="" style="display: none;">
            <div class="form-group"> <label>Email address</label> <input type="email" class="form-control" placeholder="Enter email"> <small class="form-text text-muted"></small> </div>
             <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 card col-2" style="">
          <h1 class="mb-3">ASRAMA MAHASISWA RESPATI</h1>
          <p>Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!&nbsp;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-5">
    <div class="container-fluid p-0"> <iframe width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d126498.14076468183!2d110.31692821228143!3d-7.782731956173175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-7.782627499999999!2d110.38712009999999!5e0!3m2!1sen!2sid!4v1557651438320!5m2!1sen!2sid" scrolling="no" frameborder="0"></iframe> </div>
    <div class="container">
      <div class="row">
        <div class="mx-auto p-4 col-md-6">
          <h2 class="mb-4">I feel that I never was</h2>
          <p class="mb-0 lead"> <a href="#">info@hello.com</a> </p>
        </div>
        <div class="mx-auto p-4 col-md-6">
          <h2 class="mb-4">Contact Admin</h2>
          <form>
            <div class="form-group"> <input type="email" class="form-control" id="form31" placeholder="Email"> </div>
            <div class="form-group"> <textarea class="form-control" id="form32" rows="3" placeholder="Your message"></textarea> </div> <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2019<br></p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>

</html>