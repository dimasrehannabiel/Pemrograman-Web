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

    <form action="pencarian.php" method="GET">
        <fieldset>
            <legend>Cari Data</legend>
            <label for="cari">Pencarian Data :</label>
            <input type="text" name="cari" required="required" placeholder="SKU/Nama barang/Kategori"><br><br>
            <button type="submit" name="pencarian_data" class="tombol">Cari Sekarang</button>
            <br><br>
        </fieldset>
    </form>
    <br><br>

    <?php
        if(isset($_GET['pencarian_data']))
        {
            $pencarian = $_GET['cari'];
            $query = "SELECT * FROM barang WHERE sku_barang LIKE '%$pencarian%' OR nama_barang LIKE '%$pencarian%'
                      OR kategori_barang LIKE '%$pencarian%'";
            $result = mysqli_query($connect, $query);   
    ?>
        <h2>Hasil Pencarian Data ["<?php echo $pencarian; ?>"]</h2>
        <table>
            <thead>
                <tr>
                    <th>Kode SKU</th>
                    <th>Nama Barang</th>
                    <th>Kategori Barang</th>
                    <th>Stok Barang</th>
                    <th>Harga Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data = mysqli_fetch_array($result)) :?>
                <tr>
                    <td><?php echo $data['sku_barang']; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['kategori_barang']; ?></td>
                    <td><?php echo $data['stok_barang']; ?></td>
                    <td>Rp. <?php echo $data['harga_satuan']; ?></td>
                    <td>
                        <a href="update_data_barang.php?edit_barang=<?php echo $data['sku_barang']; ?>">EDIT</a>
                        <a href="proses_data.php?delete_barang=<?php echo $data['sku_barang'];?>">HAPUS</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    <?php } ?>    
</body>
</html>