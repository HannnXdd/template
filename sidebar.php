<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">APLIKASI SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li> <a class="nav-link" href="blank.html"><i class="fas fa-th"></i>Dashboard<span></a></li>

            <?php if ($_SESSION['level'] =="admin") { ?>
            <li class="menu-header">PENGELOLAAN DATA</li>
            <li><a class="nav-link" href="../data-petugas/read.php"><i class="far fa-square"></i> <span>DATA PETUGAS</span></a></li>
            <li><a class="nav-link" href="../data-kelas/read.php"><i class="far fa-square"></i> <span>DATA KELAS</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>DATA SISWA</span></a></li>
            <li><a class="nav-link" href="../data-spp/read.php"><i class="far fa-square"></i> <span>DATA SPP</span></a></li>
            <li class="menu-header">TRANSAKSI</li>
              <a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Transaksi Pembayaran</span></a>
            </li>
              <a class="nav-link"  href="blank.html"><i class="far fa-square"></i> <span>History Pembayaran</span></a>
            </li>
            <?php } elseif ($_SESSION['level'] =="petugas") { ?>
            <li class="menu-header">TRANSAKSI</li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Transaksi Pembayaran</span></a>
            </li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>History Pembayaran</span></a>
            </li>

            <?php } else { ?>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>History Pembayaran</span></a>
            </li>
            <?php } ?>

            
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>        
        </aside>
      </div>
       