<?php
    include 'connection.php';
    $sql = "SELECT * FROM riwayat_pendidikan";
    $result = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($result)):
        $link_delete = "<a class='hapusData' href='delete_riwayat.php?id_riwayat_pendidikan=".$data['id_riwayat_pendidikan']."'>Delete</a>";
        echo "<tr>";
            echo "<td>".$data['nama_riwayat_pendidikan']."</td>";
            echo "<td>".$link_delete."</td>";   
        echo "</tr>";
    endwhile;    
?>