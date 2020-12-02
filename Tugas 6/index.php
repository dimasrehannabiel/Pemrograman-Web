<!DOCTYPE html>
<?php include ("connection.php");?>
<html>
    <head>
        <title>Kuliah Pemrograman Web</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    </head>
    
    <body>
        <div id="profil">
            <h1>Hello World!</h1>
            <img src="image/foto.png" alt="" style="border-radius: 50%; max-width: 10%; height:auto;">
            <h2>Selamat datang di perkuliahan Pemrograman Web</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
                At optio amet perspiciatis ad ipsam non, vel iusto dolor laudantium cupiditate reiciendis repudiandae voluptate nemo saepe facere. <br>
                Necessitatibus vero corrupti veniam!
            </p> 
        </div>
        <hr/>

        <div id="riwayat-pendidikan">
            <h3>Academic Resume</h3>
            <form action="proses_data.php" method="POST">
                <input type="number" name="id_riwayat_pendidikan" placeholder="ID Riwayat Pendidikan"/>
                <input type="text" name="nama_pendidikan" placeholder="Masukkan pendidikan..."><br><br>
                <input type="submit" name="submit" value="Tambah">
            </form>
            <br>

            <table>
                <tr>
                    <th>Nama Pendidikan</th>
                </tr>
                <tr id="display-riwayat"></tr>
            </table>
        </div>
        <hr/>

        <div id="hobi">
            <h3>Hobi</h3>
            <?php
                $query = "SELECT * FROM hobi";
                $result = mysqli_query($conn, $query);
            ?>
            <ol>
                <?php while($data = mysqli_fetch_array($result)): ?>
                    <li><?php echo $data['nama_hobi']?></li>
                <?php endwhile ?>
            </ol>
        </div>
        <hr/>
       
        <div id="film-favorit">
            <h3>Film Favorit</h3>
            <?php
                $query = "SELECT * FROM film_favorit";
                $result = mysqli_query($conn, $query);
            ?>
            <ul>
                <?php while($data = mysqli_fetch_array($result)): ?>
                    <li><?php echo $data['nama_film']?></li>
                <?php endwhile ?>
            </ul>
        </div>

        <!-- Memanggil File JS -->
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>