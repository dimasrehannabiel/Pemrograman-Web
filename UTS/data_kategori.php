<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS - Data Kategori</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <?php 
        include ("connection.php"); 
    ?> 
</head>
<body>
    <h1>Barokah Minimarket</h1>
    <ul class="navigasi">
        <li><a href="index.php">Home</a></li>
        <li><a href="data_kategori.php">Data Kategori</a></li>
        <li><a href="data_barang.php">Data Barang</a></li>
        <li><a href="pencarian.php">Pencarian</a></li>
    </ul>

    <form action="proses_data.php" method="GET">
        <fieldset>
            <legend>Tambah Kategori</legend>
            <label for="nama_kategori">Nama Kategori :</label>
            <input type="text" name="nama_kategori" required="required" placeholder="Masukkan nama kategori..."><br><br>
            <button type="submit" name="tambah_kategori" class="tombol">Tambah Kategori</button>
            <br><br>
        </fieldset>
    </form>
    <br><br>
    
    <table>
        <?php 
            $query = "SELECT * FROM kategori";
            $result = mysqli_query($connect, $query);
        ?>
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_array($result)) :?>
            <tr>
                <td><?php echo $data['nama_kategori']; ?></td>
                <td>
                    <!-- <a href="proses_data.php?edit_kategori=<?php //echo $data['nama_kategori']; ?>">EDIT</a> -->
                    <a href="proses_data.php?delete_kategori=<?php echo $data['nama_kategori'];?>">HAPUS</a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>