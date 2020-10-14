<?php
    $nama = "Dimas Rehan Nabiel Avianto";
    $sd = "SD Negeri jati Sidoarjo";
    $smp = "SMP Negeri 6 Sidoarjo";
    $smk = "SMK Negeri 2 Buduran";
    $skill1 = "Java";
    $skill2 = "C";
    $skill3 = "Unity";
    $skill4 = "PHP";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman CV - Rehan</title>
</head>
<body>
    <div class="container">
        <div class="navigasi">
            <a href="" class="nama-website">rehan</a>
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">pendidikan</a></li>
                <li><a href="">skill</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="header">
            <div class="foto-profil">

            </div>

            <div class="deskripsi-header">
                <div class="nama">
                    <h1>
                        <?php echo $nama ?>
                    </h1>
                </div>

                <div class="biography">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid ex ratione dolor tempora et amet vitae quisquam nostrum eligendi quidem, itaque consectetur esse, laborum illum rem magni quasi, sint quae?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="background-color: white;">
        <div class="pendidikan">
            <div class="header-pendidikan">
                <h1 class="judul">
                    RIWAYAT PENDIDIKAN
                </h1>
            </div>
        </div>
        <div class="frameflex">
            <div class="kotak">
                <h2>
                    <?php echo $sd ?>
                </h2>
                <div class="gambar-kotak1"></div>
            </div>

            <div class="kotak">
                <h2>
                    <?php echo $smp ?>
                </h2>
                <div class="gambar-kotak2"></div>
            </div>

            <div class="kotak">
                <h2>
                    <?php echo $smk ?> 
                </h2>
                <div class="gambar-kotak3"></div>
            </div>
        </div>
    </div>

    <div class="break"></div>

    <div class="container" style="background-color: white;">
        <div class="skill">
            <div class="header-skill">
                <h1>PENGUASAAN SKILL</h1>
            </div>
        </div>

        <div class="frameflex">
            <div class="kotak">
                <h2>
                    <?php echo $skill1 ?>
                </h2>
                <div class="gambar-kotak4"></div>
            </div>

            <div class="kotak">
                <h2>
                    <?php echo $skill2 ?>
                </h2>
                <div class="gambar-kotak5"></div>
            </div>

            <div class="kotak">
                <h2>
                    <?php echo $skill3 ?>
                </h2>
                <div class="gambar-kotak6"></div>
            </div>

            <div class="kotak">
                <h2>
                    <?php echo $skill4 ?>
                </h2>
                <div class="gambar-kotak7"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer">
            <h3>18081010021 - Dimas Rehan Nabiel Avianto</h3>
        </div>
    </div>
</body>
</html>