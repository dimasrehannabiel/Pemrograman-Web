<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <?php include ("connection.php"); ?> 
</head>
<body>
    <h1>Barokah Minimarket</h1>
    <ul class="navigasi">
        <li><a href="index.php">Home</a></li>
        <li><a href="data_kategori.php">Data Kategori</a></li>
        <li><a href="data_barang.php">Data Barang</a></li>
        <li><a href="pencarian.php">Pencarian</a></li>
    </ul>

    <p>Selamat datang di Barokah Minimarket</p>

    <form action="index.php" method="GET">
        <fieldset>
            <legend>Filter Range Harga</legend>
            <label for="harga_terendah">Harga Terendah :</label>
            <input type="number" name="harga_terendah" required="required" placeholder="Masukkan harga terendah">
            <br><br>

            <label for="harga_terendah">Harga Tertinggi :</label>
            <input type="number" name="harga_tertinggi" required="required" placeholder="Masukkan harga tertinggi">
            <br><br>

            <button type="submit" name="filter_data" class="tombol">Filter</button>
            <br><br>
        </fieldset>
    </form>
    <br><br>

    <?php
        if(isset($_GET['filter_data']))
        {
            $harga_terendah = $_GET['harga_terendah'];
            $harga_tertinggi = $_GET['harga_tertinggi'];

            $query_filter =  "SELECT * FROM barang WHERE harga_satuan BETWEEN $harga_terendah AND $harga_tertinggi ORDER BY harga_satuan ASC";
            $result_filter = mysqli_query($connect, $query_filter);
    ?>
            <h2>Daftar Barang Antara Harga [Rp. <?php echo $harga_terendah; ?>] Hingga [Rp. <?php echo $harga_tertinggi?>]</h2>
            <table>
                <thead>
                    <tr>
                        <th>Kode SKU</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Stok Barang</th>
                        <th>Harga Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data_filter = mysqli_fetch_array($result_filter)):?>
                        <tr>
                            <td><?php echo $data_filter['sku_barang']; ?></td>
                            <td><?php echo $data_filter['nama_barang']; ?></td>
                            <td><?php echo $data_filter['kategori_barang']; ?></td>
                            <td><?php echo $data_filter['stok_barang']; ?></td>
                            <td>Rp. <?php echo $data_filter['harga_satuan']; ?></td>
                        </tr>
                    <?php endwhile?>
                </tbody>
            </table>    
    <?php
        }
        else
        {
            $query_kategori = "SELECT * FROM kategori";
            $result_kategori = mysqli_query($connect, $query_kategori);
            while($data_kategori = mysqli_fetch_array($result_kategori)): 
    ?>
                <div class="tampil_barang_berdasarkan_kategori">
                    <h2><?php echo $data_kategori['nama_kategori']?></h2>
                    <table>
                        <?php
                            $nama_kategori = $data_kategori['nama_kategori'];
                            $query_barang = "SELECT * FROM barang WHERE kategori_barang='$nama_kategori' ORDER BY stok_barang ASC";
                            $result_barang = mysqli_query($connect, $query_barang);
                        ?>
                        <thead>
                            <tr>
                                <th>Kode SKU</th>
                                <th>Nama Barang</th>
                                <th>Kategori Barang</th>
                                <th>Stok Barang</th>
                                <th>Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($data_barang = mysqli_fetch_array($result_barang)): ?>
                                <tr>
                                    <td><?php echo $data_barang['sku_barang']; ?></td>
                                    <td><?php echo $data_barang['nama_barang']; ?></td>
                                    <td><?php echo $data_barang['kategori_barang']; ?></td>
                                    <td><?php echo $data_barang['stok_barang']; ?></td>
                                    <td>Rp. <?php echo $data_barang['harga_satuan']; ?></td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            <?php endwhile ?>
    <?php }?>    
</body>
</html>