<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
    <style>
        .custom-navbar {
            background-color: #941b0c !important;
        }

        .custom-box {
            padding: 25px;
            margin-top: 0px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="collapse" id="navbarToggleExternalContent">
    </div>
    <nav class="navbar navbar-dark custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <!-- Icon Akun (Dapat Diklik) -->
            <a href="link.profil" class="text-white" style="text-decoration: none;">
                <i class="fas fa-user-circle" style="font-size: 30px; margin-left: auto;"></i>
            </a>
        </div>
    </nav>

    <!-- Kotak di bawah Navbar -->
    <div class="custom-box" style="background-color: #ffeeba; padding: 25px; margin: 0px; text-align: center;">
        <!-- Isi kotak sesuai kebutuhan Anda -->
        <h2>Selamat datang di toko online kami!</h2>
        <p>Temukan produk terbaik kami di sini.</p>
    </div>

<!-- ... (sebelumnya tidak diubah) -->

<div class="container mt-3" style="text-align: left; font-weight: bold; font-size: 1.2em; margin-left: 10px;">
    <p>Aneka makanan menarik</p>
</div>

<!-- Tambahkan 5 Tombol Gambar dengan Nama -->
<div class="container mt-0">
    <div class="row overflow-auto">
        <div class="col text-center">
            <a href="{{ route('minuman.detail', ['id' => 1]) }}" class="btn btn-link d-block p-0">
                <img src="https://via.placeholder.com/100" alt="minuman" class="img-fluid rounded-circle">
                <p class="mt-2 mb-0">Minuman</p>
            </a>
        </div>
        <div class="col text-center">
            <a href="{{ route('jajanan.detail', ['id' => 2]) }}" class="btn btn-link d-block p-0">
                <img src="https://via.placeholder.com/100" alt="jajanan" class="img-fluid rounded-circle">
                <p class="mt-2 mb-0">Jajanan</p>
            </a>
        </div>
        <div class="col text-center">
            <a href="{{ route('aneka.detail', ['id' => 3]) }}" class="btn btn-link d-block p-0">
                <img src="https://via.placeholder.com/100" alt="anek" class="img-fluid rounded-circle">
                <p class="mt-2 mb-0">Aneka Nasi</p>
            </a>
        </div>
        <div class="col text-center">
            <a href="{{ route('pedas.detail', ['id' => 4]) }}" class="btn btn-link d-block p-0">
                <img src="https://via.placeholder.com/100" alt="pedas" class="img-fluid rounded-circle">
                <p class="mt-2 mb-0">Pedas</p>
            </a>
        </div>
        <div class="col text-center">
            <a href="{{ route('manis.detail', ['id' => 5]) }}" class="btn btn-link d-block p-0">
                <img src="https://via.placeholder.com/100" alt="manis" class="img-fluid rounded-circle">
                <p class="mt-2 mb-0">Manis</p>
            </a>
        </div>
    </div> 
</div>

    <div class="container mt-3" style="text-align: left; font-weight: bold; font-size: 1.2em; margin-left: 10px;">
        <p>Yang enak untuk kamu</p>
    </div>

    <div class="container">
        <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 10px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Risol Mayo</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 10px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Risol Mayo</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 10px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Risol Mayo</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 10px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Risol Mayo</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
