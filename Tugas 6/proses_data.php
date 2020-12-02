<?php
    include ("connection.php");

    if(isset($_POST['submit']))
    {
        $id_pendidikan = $_POST['id_riwayat_pendidikan'];
        $nama_pendidikan = $_POST['nama_pendidikan'];
        $query = "INSERT INTO riwayat_pendidikan VALUES('$id_pendidikan','$nama_pendidikan')";

        if(mysqli_query($conn,$query))
        {
            echo "berhasil";
        }
        else
        {
            echo "gagal".mysqli_error($conn);
        }
    }
?>