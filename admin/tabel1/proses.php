<?php
include '../../koneksi/koneksi.php';

// proses menambahkan tabel 1 dari admin
if ($_GET['id'] == 'tambah') {
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];


    $query = "INSERT INTO tabel1 VALUES('','$jumlah','$harga')";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di tambahkan!");window.location="tabel1.php";</script>';
}




// proses edit tabel 1 dari admin
if ($_GET['id'] == 'edit') {
    $id_tabel1 = $_POST['id_tabel1'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $query = "UPDATE tabel1 SET jumlah='$jumlah', harga='$harga' WHERE id_tabel1 = '$id_tabel1'";
    mysqli_query($connection, $query);
    echo '<script>alert("sukses");window.location="tabel1.php";</script>';
}


// proses hapus data tabel 1
if ($_GET['aksi'] == 'hapus') {
    $id_tabel1 = $_GET['id'];

    $query = "DELETE FROM tabel1 WHERE id_tabel1='$id_tabel1'";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di hapus!");window.location="tabel1.php";</script>';
}
