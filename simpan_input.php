<?php
session_start();
$nim        = $_SESSION['nim'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = date("Y-m-d");
$pSatu = $_POST['pSatu'];
$pDua     = $_POST['pDua'];
$pTiga     = $_POST['pTiga'];
$pEmpat    = $_POST['pEmpat'];
$kritik  = $_POST['kritik'];

$format = "\n$nim|$nama_lengkap|$tanggal|$pSatu|$pDua|$pTiga|$pEmpat|$kritik";

//kita buka file config.txt
$file = fopen('catatan.txt', 'a');
fwrite($file, $format);

//tutup file config
fclose($file);

?>
<script type="text/javascript">
    alert('Data Berhasil Disimpan.');
    window.location.assign('catatan.php');
</script>