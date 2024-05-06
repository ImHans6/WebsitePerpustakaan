<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telkom Library</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-primary shadow-lg">
      <div class="container">
        <a class="navbar-brand d-flex" href="index.php">
          <img src="images/logo_telkomschool.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
          <div class="">
            <h2 class="text-dark mt-2 mb-0">Telkom</h2>
            <h2 class="text-dark">Library</h2>
          </div>
        </a>
        
        <div>
          <a href="login.php" class="btn btn-outline-dark">Login</a>
          <a href="register.php" class="btn btn-secondary ms-2">Register</a>
        </div>
      </div>
    </nav>

    <!-- Alert -->
    <?php 
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Username atau Password salah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }else if($_GET['pesan'] == "logout"){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       Logout berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }else if($_GET['pesan'] == "belum_login"){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Anda harus login untuk mengakses halaman!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }else if($_GET['pesan'] == "register"){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
	?>



    <!-- Login Form -->
    <div class="d-flex justify-content-center mt-5">
    <?php
    include 'koneksi.php';
    ?>

      <form class="" action="proses/proses_login.php" method="POST">
      <div class="row justify-content-center">


      <div class="mb-3">
          <label for="nama" class="form-label">Username : </label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
          <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password : </label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="password">
      </div>    
      <button type="submit" class="btn btn-danger">Sign in</button>
      </div>
      </form>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>