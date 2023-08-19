<?php
include 'header.php';
include '../koneksi/koneksi.php';
$id_login = $_SESSION['user']['id_login'];

?>
<h1>Update Username / Password</h1>
<form method="post" action="proses_profil.php">
    <table class="table">
        <tr>
            <td>
                <div class="form-group">
                    <label for="">Username Baru</label>
                    <input type="text" name="username_baru" required class="form-control w-25" placeholder="Username Baru">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="">Password Baru</label>
                    <input type="password" name="pass_baru" required class="form-control w-25" placeholder="Password baru">
                </div>
            </td>
        </tr>
    </table>
    <input type="hidden" name="id_login" value="<?= $id_login ?>">
    <a href="index.php" class="btn btn-danger ml-3">Kembali</a>
    <button type="submit" class="btn btn-primary ">Kirim</button>
</form>

<?php include 'footer.php'; ?>