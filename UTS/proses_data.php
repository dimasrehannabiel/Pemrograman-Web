<?php
    include ("connection.php");

    if(isset($_GET['tambah_kategori']))
    {
        $nama_kategori = $_GET['nama_kategori'];
        $query = "INSERT INTO kategori (nama_kategori) VALUES('$nama_kategori')";

        mysqli_query($connect,$query);
        header("Location: data_kategori.php?tambah_kategori=sukses");
    }

    if(isset($_GET['delete_kategori']))
    {
        $nama_kategori = $_GET['delete_kategori'];
        $query = "DELETE FROM kategori WHERE nama_kategori='$nama_kategori'";

        mysqli_query($connect, $query);
        header("Location: data_kategori.php?nama_kategori=$nama_kategori&status_delete=sukses");
    }

    if(isset($_GET['tambah_barang']))
    {
        $sku_barang = $_GET['sku_barang'];
        $nama_barang = $_GET['nama_barang'];
        $kategori_barang = $_GET['kategori_barang'];
        $stok_barang = $_GET['stok_barang'];
        $harga_satuan = $_GET['harga_satuan'];
        $query = "INSERT INTO barang VALUES ('$sku_barang', '$nama_barang', '$kategori_barang',
                                            '$stok_barang', '$harga_satuan')";

        mysqli_query($connect, $query);
        header("Location: data_barang.php?tambah_barang=sukses");
    }

    if(isset($_GET['update_barang']))
    {
        $sku_barang = $_GET['sku_barang'];
        $nama_barang = $_GET['nama_barang'];
        $kategori_barang = $_GET['kategori_barang'];
        $stok_barang = $_GET['stok_barang'];
        $harga_satuan = $_GET['harga_satuan'];
        $query = "UPDATE barang SET sku_barang='$sku_barang', nama_barang='$nama_barang', kategori_barang='$kategori_barang', 
                  stok_barang='$stok_barang', harga_satuan='$harga_satuan' WHERE sku_barang='$sku_barang'";

        mysqli_query($connect, $query);
        header("Location: data_barang.php?update_barang=sukses");
    }

    if(isset($_GET['delete_barang']))
    {
        $sku_barang = $_GET['delete_barang'];
        $query = "DELETE FROM barang WHERE sku_barang='$sku_barang'";

        mysqli_query($connect, $query);
        header("Location: data_barang.php?sku_barang=$sku_barang&status_delete=sukses");
    }
?>