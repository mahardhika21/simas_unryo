 <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Nathan Andrews</h2><span>Mahasiswa</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>SIMAS</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu Mahasiswa</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo $url .'/mahasiswa'; ?>"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="<?php echo $url .'/mahasiswa/profile'; ?>"> <i class="icon-user"></i>Profile                             </a></li>
          <li><a href="#dropdownmsg" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-envelope"></i>pesan </a>
              <ul id="dropdownmsg" class="collapse list-unstyled ">
                <li><a href="<?php echo $url .'/mahasiswa/send_message'; ?>">Kirim Pesan</a></li>
                <li><a href="<?php echo $url .'/mahasiswa/message'; ?>">list pesan</a></li>
              </ul>
            </li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Kamar </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="<?php echo $url .'/mahasiswa/room'; ?>">List Kamar</a></li>
                <li><a href="<?php echo $url .'/mahasiswa/myroom'; ?>">Kamar Saya</a></li>
                <li><a href="<?php echo $url .'/mahasiswa/payment'; ?>">Konfiramsi Pembayaran</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>