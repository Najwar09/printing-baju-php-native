<?php
include '../header2.php';
include '../../koneksi/koneksi.php';
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
             

            </nav>
            <!-- bagian akhir navbar -->

            <!-- awal tabel -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tambah tabel 2</h1>

              <!-- form inputan -->
                <div class="container">
                    <form enctype="multipart/form-data" method="post" action="proses.php?id=tambah">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="Masukkan kategori" name="kategori">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga">
                        </div>
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