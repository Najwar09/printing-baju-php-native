<?php
include '../../koneksi/koneksi.php';

// proses menambahkan gambar dari admin
if ($_GET['id'] == 'tambah') {
    $dir = '../../gambar/';
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $temp = explode(".", $_FILES["gambar"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_path = $dir . basename($newfilename);
    $allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg", "image/png",   "image/x-png");

    if ($_FILES['gambar']["error"] > 0) {
        echo '<script>alert("Error file");history.go(-1)</script>';
        exit();
    } elseif (round($_FILES['gambar']["size"] / 1024) > 4096) {
        echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB !");history.go(-1)</script>';
        exit();
    } else {
        if (move_uploaded_file($tmp_name, $target_path)) {
            $gambar = $newfilename;

            $query = "INSERT INTO portofolio VALUES('','$gambar')";
            mysqli_query($connection, $query);

            echo '<script>alert("Data berhasil di tambahkan!");window.location="porto.php";</script>';
        }
    }
}




// proses edit gambar dari admin
if ($_GET['id'] == 'edit') {
    $dir = '../../gambar/';
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $temp = explode(".", $_FILES["gambar"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_path = $dir . basename($newfilename);
    $allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg",   "image/png",   "image/x-png");

    $gambar = $_POST['gambar_lama'];

    $id_portofolio = $_POST['id_portofolio'];



    if ($_FILES['gambar']["size"] > 0) {
        if ($_FILES['gambar']["error"] > 0) {
            echo '<script>alert("Error file");history.go(-1)</script>';
            exit();
        } elseif (!in_array($_FILES['gambar']["type"], $allowedImageType)) {
            echo '<script>alert("You can only upload JPG, PNG and GIF file");history.go(-1)</script>';
            exit();
        } elseif (round($_FILES['gambar']["size"] / 1024) > 4096) {
            echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB !");history.go(-1)</script>';
            exit();
        } else {
            if (move_uploaded_file($tmp_name, $target_path)) {
                if (file_exists('../../gambar/' . $gambar)) {
                    unlink('../../gambar/' . $gambar);
                }
                $gambar = $newfilename;
            } else {
                echo '<script>alert("Error file");history.go(-1)</script>';
                exit();
            }
        }
    } else {
        $gambar = $_POST['gambar_lama'];
    }

    
    $query = "UPDATE portofolio SET gambar='$gambar' WHERE id_portofolio = '$id_portofolio'";
    mysqli_query($connection,$query);
    echo '<script>alert("sukses");window.location="porto.php"</script>';

}

// proses hapus data gambar
if ($_GET['aksi'] == 'hapus') {
    $id_portofolio = $_GET['id'];
    $gambar = $_GET['gambar'];

    unlink('../../gambar/' . $gambar);

    $query = "DELETE FROM portofolio WHERE id_portofolio ='$id_portofolio'";
    mysqli_query($connection, $query);

    echo '<script>alert("Data berhasil di hapus!");window.location="porto.php";</script>';
}
