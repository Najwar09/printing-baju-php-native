<?php
include 'koneksi/koneksi.php';
$query = "SELECT * FROM tabel1 ORDER BY id_tabel1 ASC";
$hasil = mysqli_query($connection, $query);

$query2 = "SELECT * FROM tabel2 ORDER BY id_tabel2 ASC";
$hasil2 = mysqli_query($connection, $query2);

$query3 = "SELECT * FROM tabel3 ORDER BY id_tabel3 ASC";
$hasil3 = mysqli_query($connection, $query3);

$query4 = "SELECT * FROM portofolio ORDER BY id_portofolio ASC";
$hasil4 = mysqli_query($connection, $query4);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-color: black;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="./gambar/9766527f2b5d3e95d4a733fcfb77bd7e.jpg" width="60">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-warning " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cara Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- utama -->
    <div style="width: 100%; background-color:gray;">
        <div class="container">
            <center>
                <div class="jumbotron" style="padding-top: 200px; height:650px">
                    <h3 style="font-size: 80px; color:#ffffff;font-family:caprasimo;letter-spacing:3px;text-shadow:0 5px 10px #000000">Parapi.Id</h3>
                    <p style="font-size: 25px;color:white;">vendor sablon kaos</p>
                    <p class="btn btn-success">
                        <a href="https://wa.me/+6285298624433" class="text-light" target="_blank">Pesan Sekarang</a>
                    </p>
                </div>
            </center>
        </div>
    </div>
    <!-- akhir utama -->


    <!-- tentang -->
    <div class="container text-light text-center py-5">
        <h2>Tentang</h2>
        <h1>SELAMAT DATANG DI PARAPI.ID</h1>

        <div class="container mt-5">
            <div class="row">
                <!-- Kolom Gambar (6 kolom grid) -->
                <div class="col-md-6">
                    <img src="./gambar/baju1.jpg" alt="Gambar Anda" class="img-fluid">
                </div>

                <!-- Kolom Teks (6 kolom grid) -->
                <div class="col-md-6 text-justify" style="font-size:20px">
                    <p>CV TAPADA BERKAH BERSAMA adalah sebuah Perusahaan yang fokus bergerak dalam bidang industri sablon dan konveksi.</p>
                    <p>Tapada resmi beroperasi sejak februari 2020 dan merupakan hasil merger dari tiga perusahaan yang bergerak pada industri yang sama.</p>
                    <p>Tujuan utama diinisiasinya Tapada merupakan wujud pengembangan industri serta bisnis sablon dan konveksi di kota Makassar, Bahkan Indonesia Timur.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- akhir dari tentang -->


    <!-- cara order -->
    <div class="container text-light text-center py-5">
        <h1>CARA ORDER</h1>

        <div class="container mt-5">
            <div class="container">
                <!-- baris 1 -->
                <div class="row">

                    <!-- Kartu 1 -->
                    <div class="col-md-4 my-3">
                        <div class="card mx-auto" style="width: 18rem; height:200px;">
                            <div class="card-body">
                                <h5 class="card-title">Siapkan Desain</h5>
                                <p class="card-text">Siapkan desain anda dengan format JPG/PNG/CDR/PSD. Jika belum punya, kami bisa membantu untuk proses desain</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu 2 -->
                    <div class="col-md-4 my-3">
                        <div class="card mx-auto" style="width: 18rem;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title">Kirim Desain</h5>
                                <p class="card-text">Kirim desain bisa melalui email atau whatsapp. bisa juga desain di antarkan langsung ke kantor kami.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu 3 -->
                    <div class="col-md-4 my-3">
                        <div class="card mx-auto" style="width: 18rem;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title">Pembayaran</h5>
                                <p class="card-text">Anda bisa melakukan pembayaran uang muka minimal 50% dari total harga. Pelunasan dapat dilakukan setelah orderan selesai</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- baris 2 -->
                <div class="row">

                    <!-- Kartu 4 -->
                    <div class="col-md-4 my-3">
                        <div class="card mx-auto" style="width: 18rem;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title">Proses Produksi</h5>
                                <p class="card-text">Waktu produksi berkisar antara 1-2 minggu. Bisa juga lebih cepat. Pemesanan dengan jumlah banyak, waktu produksi akan dibicarakan kembali.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu 5 -->
                    <div class="col-md-4 my-3">
                        <div class="card mx-auto" style="width: 18rem;height:200px;">
                            <div class="card-body">
                                <h5 class="card-title">Pengiriman</h5>
                                <p class="card-text">Orderan yang telah selesai akan kami kirimkan menggunakan jasa pengiriman. Anda juga bisa datang langsung ke kantor kami untuk mengambil barang.</p>
                            </div>
                        </div>
                    </div>




                </div>

            </div>

        </div>

    </div>
    <!-- akhir dari cara order -->

    <!-- Portofolio -->
    <div class="container text-light text-center py-5">
        <h1>PORTOFOLIO</h1>
        <div class="container mt-5">
            <div class="container">
                <!-- baris 1 -->
                <div class="row mb-3 ">
                    <?php
                    foreach ($hasil4 as $isi) { ?>
                        <!-- Kartu 1 -->
                        <div class="col-md-4 mb-5 ">
                            <div class="card mx-auto" style="width: 18rem; height:400px;">
                                <img src="gambar/<?= $isi['gambar']; ?>" height="400px">
                            </div>
                        </div>
                    <?php } ?>


                </div>



            </div>

        </div>

    </div>
    <!-- akhir dari cara order -->

    <!-- Daftar harga -->
    <div class="container text-light text-center py-5">
        <h1>DAFTAR HARGA</h1>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-striped table-condensed table-bordered" style="opacity: 0.3;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-8 col-xl-4">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- akhir dari daftar harga -->



























    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>