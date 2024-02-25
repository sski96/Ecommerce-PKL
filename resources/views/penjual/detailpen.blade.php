<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #941B0C;
            padding: 10px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-button {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .bold-text {
            font-weight: bold;
            margin-right: 1150px;
        }

        .content {
            padding: 20px;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <button class="navbar-button"><i class="fas fa-chevron-left"></i></button>
        <span class="bold-text">Detail Order</span>
    </div>

    <div class="card" style="max-width: 100%;">
        <img src="..." class="card-img-top" alt="..." style="width: 100%; height: auto;">
        </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
          <div class="col-md-10"> <!-- Menyesuaikan lebar kolom untuk card -->
            <div class="card">
              <div class="card-body">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Status</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="">
                  </div>
                  <div class="col-12 mt-3">
                    <label for="textareaAddress" class="form-label">Pesan</label>
                    <textarea class="form-control" id="textareaAddress" rows="3"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="button" class="btn btn-outline-danger" style="text-align: left; color: black; border-color: #941B0C; border-radius: 17px;">Keluar</button>
                  </div>                                                        
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
            
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
