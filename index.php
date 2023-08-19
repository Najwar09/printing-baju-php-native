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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parapi.id</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>

    <!-- bagian navbar -->
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="gambar/9766527f2b5d3e95d4a733fcfb77bd7e.jpg" /></a>
            </div>
            
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#gambar">Portofolio</a></li>
                    <li><a href="#order">Cara Order</a></li>
                    <li><a href="#harga">Daftar harga</a></li>
                    <li><a href="#kontak">kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir dari navbar -->


    <div class="layar-penuh">


        <!-- nama toko beserta tombol pesan -->
        <header id="home" style="background-color: gray;">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="foto/video1.mp4" type="video/mp4" />
            </video>
            <div class="intro">
                <h3>Parapi.Id</h3>
                <p>vendor sablon kaos</p>
                <p>
                    <a href="https://wa.me/+6285298624433" class="tombol" target="_blank">Pesan Sekarang</a>
                </p>
            </div>
        </header>
        <!-- akhir dari nama toko dan tombol pesan   -->


        <main style="background-color: black;">
            <!-- tentang toko -->
            <section id="tentang">
                <div class="layar-dalam">
                    <h2>Tentang</h2>
                    <h3 style="color: white;">SELAMAT DATANG DI PARAPI.ID</h3>
                    <img src="gambar/baju1.jpg" />
                    <p class="ringkasan">CV TAPADA BERKAH BERSAMA adalah sebuah Perusahaan yang fokus bergerak dalam bidang industri sablon dan konveksi.</p>
                    <div class="konten-isi">
                        <p>Tapada resmi beroperasi sejak februari 2020 dan merupakan hasil merger dari tiga perusahaan yang bergerak pada industri yang sama.</p>
                        <p>Tujuan utama diinisiasinya Tapada merupakan wujud pengembangan industri serta bisnis sablon dan konveksi di kota Makassar, Bahkan Indonesia Timur.</p>
                    </div>
                </div>
            </section>
            <!-- akhir tentang toko -->



            <!-- cara order -->
            <section class="abuabu" id="order">
                <div>
                    <h3 class="text-light">Cara Order</h3>
                </div>
                <div class="layar-dalam order">
                    <div class="box">
                        <img src="gambar/baju2.jfif"/>
                        <h6>Siapkan Desain</h6>
                        <p>Siapkan desain anda dengan format JPG/PNG/CDR/PSD. Jika belum punya, kami bisa membantu untuk proses desain</p>
                    </div>
                    <div class="box">
                        <img src="gambar/baju2.jfif" />
                        <h6>Kirim Desain</h6>
                        <p>Kirim desain bisa melalui email atau whatsapp. bisa juga desain di antarkan langsung ke kantor kami.</p>
                    </div>
                    <div class="box">
                        <img src="gambar/baju2.jfif" />
                        <h6>Pembayaran</h6>
                        <p>Anda bisa melakukan pembayaran uang muka minimal 50% dari total harga. Pelunasan dapat dilakukan setelah orderan selesai</p>
                    </div>
                    <div class="box">
                        <img src="gambar/baju2.jfif" />
                        <h6>Proses Produksi</h6>
                        <p>Waktu produksi berkisar antara 1-2 minggu. Bisa juga lebih cepat. Pemesanan dengan jumlah banyak, waktu produksi akan dibicarakan kembali.</p>
                    </div>
                    <div class="box">
                        <img src="gambar/baju2.jfif">
                        <h6>Pengiriman</h6>
                        <p>Orderan yang telah selesai akan kami kirimkan menggunakan jasa pengiriman. Anda juga bisa datang langsung ke kantor kami untuk mengambil barang.</p>
                    </div>
            </section>
            <!-- akhir cara order -->

            

            <!-- kumpulan gambar produk -->
            <section id="gambar">
                <div>
                    <h3 class="text-light">Portofolio</h3>
                </div>
                    <?php
                    foreach ($hasil4 as $isi){
                    ?>
                <div>
                    <img src="gambar/<?= $isi['gambar']; ?>">
                </div>
                <?php } ?>
            </section>
            <!-- bagian akhir dari gambar produk -->



            <!-- tabel untuk harga sablon -->
            <section id="harga">
                <div>
                    <h3 class="text-light">Daftar Harga</h3>
                </div>
                <caption >
                    <p class="text-light">Sablon +</p>
                    <p class="text-light">Kaos</p>
                </caption>
                <table class="tabel1">
                    <tr>
                        <th>KETERANGAN</th>
                    </tr>
                    <tr>
                        <td>1. Bahan Combad 30s</td>
                    </tr>
                    <tr>
                        <td>2. Ukuran Desain minimal A3</td>
                    </tr>
                    <tr>
                        <td>3. Maksimal 4 Warna Sablon</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <th>TAMBAHAN</th>
                    </tr>
                    <tr>
                        <td>1. Lengan Panjang +10k</td>
                    </tr>
                    <tr>
                        <td>2. tambahan Warna +3k</td>
                    </tr>
                    <tr>
                        <td>3. Ukuran Kaos XXL-XXXL +10k</td>
                    </tr>
                    <tr>
                        <td>4. Kaos Combad 24s +5k</td>
                    </tr>
                </table>
                
                <table class="table-line">
                    <tr>
                        <th>Jumlah Order</th>
                        <th>Harga</th>
                    </tr>
                    <?php
                    foreach ($hasil as $isi){
                    ?>
                    <tr>
                        <td><?= $isi['jumlah']; ?></td>
                        <td>Rp. <?= number_format($isi['harga']); ?></td>
                    </tr>
                    <?php } ?>
                </table>


                <caption>
                    <p class="text-light">Sablon +</p>
                    <p class="text-light">Kaos</p>
                </caption>
                <table class="tabel2">
                    <tr>
                        <th>EFEK KHUSUS *</th>
                    </tr>
                    <tr>
                        <td>1. Raster + 10-30k</td>
                    </tr>
                    <tr>
                        <td>2. Gradasi +10-30k</td>
                    </tr>
                    <tr>
                        <td>3. Dischange + 10-30k</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>(* Minimal Order 12 Pcs)</td>
                    </tr>
                    <table class="table-line">
                        <tr>
                            <th>Kategori</th>
                            <th>Harga</th>
                        </tr>
                        <?php
                    foreach ($hasil2 as $isi){
                    ?>
                        <tr>
                            <td><?= $isi['kategori']; ?></td>
                            <td>Rp. <?= number_format($isi['harga']); ?></td>
                        </tr>
                      <?php } ?>
                    </table>


                    <table class="table-line">
                        
                        <tr>
                            <th>Jumlah Order</th>
                            <th>Harga</th>
                        </tr>
                        <?php
                    foreach ($hasil3 as $isi){
                    ?>
                        <tr>
                            <td><?= $isi['jumlah']; ?></td>
                            <td>Rp. <?= number_format($isi['harga']); ?></td>
                        </tr>
                        <?php } ?>
                    </table>
            </section>
        </main>
        <footer id="kontak">
            <div class="layar-dalam">
                <div class="informasi">
                    <h5>Parapi.id</h5>
                    <p>Budaran Samata Gowa</p>
                    <p>+62 852-9862-4433</p>
                    <p>email</p>
                </div>
                <div>
                    <h5>Layanan Kami</h5>
                    <P>sablon manual</P>
                    <P>sablon digital</P>
                    <P>konveksi</P>
                    <P>PDH</P>
                </div>
                <di>
                    <h5>Petunjuk Arah</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.394315916457!2d119.4861556744734!3d-5.200554952431415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3697ca56377%3A0x4c84b2f9e406b46c!2sBundaran%20Samata!5e0!3m2!1sid!2sid!4v1691032814058!5m2!1sid!2sid" width="400" height="200" style="border:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </di>
            </div>
            <div class="layar-dalam">
                <div class="copyright">
                    &copy; 2023 Parapi.Id
                </div>
            </div>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>