<?php

$nim        = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];

$format = "$nim|$nama_lengkap";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);
if (in_array($format, $file)) { //jika data ditemukan
    session_start();
    $_SESSION['nim'] = $nim;
    $_SESSION['nama_lengkap'] = $nama_lengkap;

    header("Location:user.php");
} else { //jika data tidak ditemukan 
?>
    <script type="text/javascript">
        window
        alert('Nama Dan NIM Yang Anda Masukan Salah.');
        window.location.assign('index.php');
    </script>
<?php }
