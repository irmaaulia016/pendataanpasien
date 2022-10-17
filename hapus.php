<?php
include("koneksi.php");
isset($_GET['simpan']);
    $kode = $_GET['id'];

    $sql = "DELETE FROM tb_pasien WHERE id=$kode";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location:pasien.php?status=sukses');
    }else{
        die ("akses dilarang");
    }
?>