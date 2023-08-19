<?php
include '../header2.php';
include '../../koneksi/koneksi.php';
$id_portofolio = $_GET['id'];
$query = "SELECT * FROM portofolio WHERE id_portofolio = '$id_portofolio'";
$hasil = mysqli_query($connection, $query);
$isi = mysqli_fetch_assoc($hasil);
?>

<!-- Page Wrapper -->
<div id="wrapper">

    <?php include '../sidebar2.php'; ?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- navbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- awal navbar -->
                <ul class="navbar-nav ml-auto">

             

                </ul>

            </nav>
            <!-- bagian akhir navbar -->

            <!-- awal tabel -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Edit Gambar</h1>

                <!-- form inputan -->
                <div class="container">
                    <form enctype="multipart/form-data" method="post" action="proses.php?id=edit">
                        

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" id="gambar" accept="image/*" name="gambar">
                        </div>

                        <div class="form-group">
                            <label for="tes">Gambar</label>
                            <img src="../../gambar/<?= $isi['gambar']; ?>" class="img-fluid" style="height:150px;">
                        </div>
                        
                        <input type="hidden" value="<?= $isi['gambar']; ?>" name="gambar_lama">
                        <input type="hidden" value="<?= $isi['id_portofolio']; ?>" name="id_portofolio">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>









            </div>
            <!-- akhir tabel -->



        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->





<?php include '../footer2.php';
?>