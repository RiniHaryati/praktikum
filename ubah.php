
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
        <a class="navbar-brand" href="#">Pronet</a>
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
        <li><a class="btn btn-link" data-toggle="modal" data-target="#myModal">Login</a></li>
      </ul>
    </div>
  </nav>
  <header style="background: url(images/header.jpg);">
    <div class="text-center">
      <h1>Tekno Blog</h1>
      <div class="lead">Informasi Terkini Teknologi Informasi</div>
    </div>
  </header>

      <div class="col-md-6 col-md-offset-4">
        <div class="row">

          <!-- Mengambil Data dari database yang id-nya sama dengan id (hidden) yang dipilih di form sebelumnya -->

          <?php
          $id=$_POST['id'];
          $query = $db->prepare("SELECT * FROM akun WHERE id=$id");
          $query->execute();
          $result = $query;

          //Mengambil record dan diinisialisasikan ke dalam variabel $data, menjadi value untuk setiap isian form
          foreach ($result as $data) {
            ?>

          <form action="update.php" method="post">
        <h3>
        <table id="daftar" width="100%">
          <tr>
            <th colspan="2" style="text-align: center">Update Akun</th>
          </tr>
          <tr>
            <input type="text" name="id" hidden value="<?php echo $data['id']; ?>">
            <td>Username</td><td><input type="text" name="pengguna" value="<?php echo $data['username']; ?>"></td>
          </tr>
          <tr>
            <td>Password</td><td><input type="password" name="sandi" value="<?php echo $data['password']; ?>"></td>
          </tr>
          <tr>
            <td>Nama</td><td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
          </tr>
          <tr>
            <td>Email</td><td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
          </tr>

          <?php
          }
          ?>
          <tr>
            <td>&nbsp;</td><td><button class="btn btn-primary btn-lg" type="submit" name="btnUbah">Simpan Perubahan</button></td>
          </tr>
        </table>
        </h3>
      </form>

      </div>
      </div>

</body>
</html>
