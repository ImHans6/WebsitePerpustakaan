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
        <a class="navbar-brand d-flex" href="#">
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

    <! -- Register Form -->
    <div class="d-flex justify-content-center my-5">
      <form class="col-lg-5" action="proses/proses_register.php" method="POST">
      <div class="row justify-content-center">


      <div class="mb-3">
          <label for="usernmae" class="form-label">Username : </label>
          <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Password : </label>
          <input type="text" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email : </label>
          <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
          <label for="tempatLahir" class="form-label">Tempat lahir : </label>
          <input type="text" class="form-control" id="tempatLahir" name="tempat_lahir">
      </div>

      <div class="mb-3">
          <label for="Tanggal_lahir">Tanggal Lahir : </label>
          <input id="Tanggal_lahir" class="form-control" type="date" name="tanggal_lahir"/>
      </div>

      <div class="mb-3">
          <label for="alamat" class="form-label">Alamat : </label>
          <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
      </div>
      
      <label for="jenis_kelamin" class="form-label">Jenis Kelamin : </label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_pria" value="pria">
          <label class="form-check-label" for="jk_pria">
              Pria
          </label>
      </div>
      <div class="form-check mb-3">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_wanita" value="wanita">
      <label class="form-check-label" for="jk_wanita">
          Wanita
      </label>
      </div>   
      <button type="submit" class="btn btn-danger">Register</button>
      </div>
      </form>
    </div>







    <script type="text/javascript">
      let tanggalLahir = document.getElementById('Tanggal_lahir')
      startDate.addEventListener('change',(e)=>{
        let tanggalLahirVal = e.target.value
        })


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>