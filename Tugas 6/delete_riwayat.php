<?php
    include 'connection.php';
    $query = "DELETE FROM riwayat_pendidikan WHERE id_riwayat_pendidikan='".$_GET['id_riwayat_pendidikan']."'";
    if(mysqli_query($conn,$query))
    {
        echo "berhasil";
    }
    else
    {
        echo "gagal".mysqli_error($conn);
    }
?>