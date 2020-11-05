<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS - Data Barang</title>
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
            <legend>Tambah Barang</legend>
            <label for="sku_barang">SKU Barang :</label>
            <input type="text" name="sku_barang" required="required" placeholder="Masukkan SKU barang...">
            <br><br>

            <label for="nama_barang">Nama Barang :</label>
            <input type="text" name="nama_barang" required="required" placeholder="Masukkan nama barang...">
            <br><br>

            <label for="kategori_barang">Kategori Barang :</label>
            <?php
                    $query = "SELECT nama_kategori FROM kategori ORDER BY nama_kategori ASC";
                    $result = mysqli_query($connect, $query);
            ?>        
            <select name="kategori_barang" required="required">
                <option value="">-Pilih Salah Satu-</option>
                <?php while($data = mysqli_fetch_array($result)): ?>
                    <option value="<?php echo $data['nama_kategori']?>">
                        <?php echo $data['nama_kategori']?>
                    </option><br>
                <?php endwhile ?>
            </select>
            <br><br>

            <label for="stok_barang">Stok Barang :</label>
            <input type="number"  name="stok_barang" required="required" placeholder="Masukkan jumlah stok...">
            <br><br>

            <label for="harga_satuan">Harga Satuan :</label>
            <input type="number" name="harga_satuan" required="required" placeholder="Masukkan harga satuan...">
            <br><br>

            <button type="submit" name="tambah_barang" class="tombol">Tambahkan</button>
        </fieldset>
    </form>
    <br><br>

    <table>
        <?php 
            $query = "SELECT * FROM barang ORDER BY sku_barang ASC";
            $result = mysqli_query($connect, $query);
        ?>
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
</body>
</html>