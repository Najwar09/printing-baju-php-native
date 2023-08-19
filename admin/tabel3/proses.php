<?php
include '../../koneksi/koneksi.php';

// proses menambahkan tabel 1 dari admin
if ($_GET['id'] == 'tambah') {
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];


    $query = "INSERT INTO tabel3 VALUES('','$jumlah','$harga')";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di tambahkan!");window.location="tabel3.php";</script>';
}




// proses edit tabel 1 dari admin
if ($_GET['id'] == 'edit') {
    $id_tabel3 = $_POST['id_tabel3'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $query = "UPDATE tabel3 SET jumlah='$jumlah', harga='$harga' WHERE id_tabel3 = '$id_tabel3'";
    mysqli_query($connection, $query);
    echo '<script>alert("sukses");window.location="tabel3.php";</script>';
}

// proses hapus data tabel 1
if ($_GET['aksi'] == 'hapus') {
    $id_tabel3 = $_GET['id'];

    $query = "DELETE FROM tabel3 WHERE id_tabel3='$id_tabel3'";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di hapus!");window.location="tabel3.php";</script>';
}
