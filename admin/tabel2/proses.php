<?php
include '../../koneksi/koneksi.php';

// proses menambahkan tabel 2 dari admin
if ($_GET['id'] == 'tambah') {
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];


    $query = "INSERT INTO tabel2 VALUES('','$kategori','$harga')";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di tambahkan!");window.location="tabel2.php";</script>';
}




// proses edit tabel 1 dari admin
if ($_GET['id'] == 'edit') {
    $id_tabel2 = $_POST['id_tabel2'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $query = "UPDATE tabel2 SET kategori='$kategori', harga='$harga' WHERE id_tabel2 = '$id_tabel2'";
    mysqli_query($connection, $query);
    echo '<script>alert("sukses");window.location="tabel2.php";</script>';
}


// proses hapus data tabel 1
if ($_GET['aksi'] == 'hapus') {
    $id_tabel2 = $_GET['id'];

    $query = "DELETE FROM tabel2 WHERE id_tabel2='$id_tabel2'";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di hapus!");window.location="tabel2.php";</script>';
}
