<?php
include 'header.php';
include '../koneksi/koneksi.php';

?>

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php
    include './sidebar.php';
    ?>



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

                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

            

                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5><?= $_SESSION['user']['username']; ?></h5></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- bagian akhir navbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <h4 class="text-center">"Selamat datang di halaman Dashboard Admin Printing Baju Kaos kami, tempat di mana Anda memiliki kendali penuh atas semua aspek dalam proses cetak kaos. Di sini, Anda akan menemukan visualisasi data yang informatif tentang pesanan terbaru, inventaris bahan baku, dan perkembangan produksi. Melalui tampilan intuitif ini, Anda dapat dengan mudah melacak pesanan yang sedang berjalan, mengelola desain yang ada, serta mengoptimalkan kinerja produksi. Dashboard kami dirancang untuk memberikan gambaran menyeluruh tentang operasi cetak kaos Anda, membantu Anda mengambil keputusan yang cerdas, dan memastikan bahwa setiap pesanan dijalankan dengan lancar menuju hasil yang berkualitas tinggi. Selamat bekerja, dan mari ciptakan pengalaman cetak kaos yang tak terlupakan bersama platform kami."  </h4>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                       

                        
                    </div>

                 

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    

    

<?php
include 'footer.php'; 
?>