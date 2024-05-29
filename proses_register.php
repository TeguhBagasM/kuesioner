<?php
error_reporting(0);
$nim        = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];

//cek apakah nim sudah terdaftar atau belum
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach ($data as $value) { //foreach untuk perulangan data sebagai value
    $pecah = explode("|", $value);
    if ($nim == $pecah['0']) { //jika nim sama dengan $pecah index ke 0 maka cek adalah true
        $cek = true;
    }
}

if ($cek) { //jika nim sudah terdaftar 
?>
    <script type="text/javascript">
        alert('NIM dan Nama Anda Sudah Terdaftar');
        window.location.assign('register.php');
    </script>
<?php } else { //jika data tidak ditemukan
    //buat format penyimpanan ke txt config
    $format = "\n$nim|$nama_lengkap";

    //buka dulu file config.txt
    $file = fopen('config.txt', 'a');
    fwrite($file, $format);

    //tutup file
    fclose($file);

?>
    <script type="text/javascript">
        alert('Pendaftaran Berhasil Dilakukan.');
        window.location.assign('index.php');
    </script>

<?php }
