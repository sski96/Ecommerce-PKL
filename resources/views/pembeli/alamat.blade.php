<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alamat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-..." crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            /* Menambahkan warna latar belakang hitam */
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
        }

        .center-div {
            text-align: center;
        }

        .navbar-image {
            width: 80px;
            /* Mengubah lebar gambar */
            height: 80px;
            /* Mengubah tinggi gambar */
            border-radius: 50%;
            /* Mengubah border-radius untuk membuat elips */
            background-color: #941B0C;
            margin-top: 20px;
            /* Menambahkan margin di bagian atas gambar */
        }


        .card {
            max-width: 90%;
            margin: 20px auto;
            /* Mengubah margin menjadi margin 20px atas dan bawah, dengan auto untuk memusatkan */
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-simpan {
            border-color: #941B0C;
            font-weight: bold;
            border-width: 2px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="left-div">
        <nav class="navbar">
            <button class="navbar-button"><i class="fas fa-chevron-circle-left"></i></button>
            <span class="bold-text">Alamat</span>
        </nav>
    </div>

    <div class="center-div">
        <!-- Isi div tengah sesuai kebutuhan -->
        <img src="asset/image/Place Marker.png" alt="Icon" class="navbar-image">
    </div>

    <div class="card">
        <form>
            <div class="form-group">
                <label for="foodName">Nama Lengkap :</label>
                <input type="text" id="foodName" name="foodName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="foodPrice">Nomor Telepon :</label>
                <input type="number" id="foodPrice" name="foodPrice" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stock">Jurusan :</label>
                <input type="number" id="stock" name="stock" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Kelas :</label>
                <textarea id="description" name="description" rows="4" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="foodLocation">Ruangan :</label>
                <input type="text" id="foodLocation" name="foodLocation" class="form-control" required>
            </div>
            <div class="form-group text-right">
                <button type="button" class="btn btn-simpan">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
