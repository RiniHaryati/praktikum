<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Belajar Bootstrap</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: silver;">
  <?php include "includes/modal_login.php"; ?>
  <nav class="navbar navbar-custom">
    <div class="container fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Proweb</a>
      </div>

      <!-- Membuat Search Bar -->
          <div class="nav navbar-nav form-inline navbar-right" style="padding: 10px;">
            <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-default">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div></div>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Halaman Utama</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Hubungi</a></li>

        <!-- Kalau sudah login link yang muncul logout, kl belum login link yg muncul Login -->

        <?php if(isset($_SESSION['login_user'])): ?>
          <li><a href="logout.php">Logout</a></li>
          <li>
          <a href="admin.php">
          <span class="glyphicon glyphicon-user"></span>
        </a></li>
        <?php else: ?>
          <li><a class="btn btn-link" data-toggle="modal" data-target="#myModal">Login</a></li>
        <?php endif; ?>


      </ul>
    </div>
  </nav>
  <header style="background: url(images/header.jpg);">
    <div class="text-center">
      <h1>Tekno Blog</h1>
      <div class="lead">Informasi Terkini Teknologi Informasi</div>
    </div>
  </header>

  <!-- Membuat Postingan -->
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div id="post">
        <h1><a href="so.php">Sistem Operasi Komputer</a></h1>
        <p class="lead">Berbagai jenis sistem operasi yang ada pada
	komputer, ponsel pintar dan   perangkat elektronik lainnya.</p>
        <p>15-October-2017 | Ivan Jaya</p>
      </div>
      <div class="tbl-bwh text-right">
        <button class="btn btn-default btn-lg">Sebelumnya
        <span class="glyphicon glyphicon-menu-right"></span></button>
      </div>
    </div>
  </div>
</body>
</html>
