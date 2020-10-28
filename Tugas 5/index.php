<!DOCTYPE html>
<?php include ("connection.php"); ?>
<html>
    <head>
        <title>Kuliah Pemrograman Web</title>
        <style>
            table, th, td
            {
                border : 1px solid black;
            }
        </style>
    </head>
    
    <body>
        <h1>Hello World!</h1>
        <img src="image.png" alt="" style="border-radius: 50%; max-width: 10%; height:auto;">
        <h2>Selamat datang di perkuliahan Pemrograman Web</h2>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
            At optio amet perspiciatis ad ipsam non, vel iusto dolor laudantium cupiditate reiciendis repudiandae voluptate nemo saepe facere. <br>
            Necessitatibus vero corrupti veniam!
        </p> 
        
        <h3><u>Academic Resume</u></h3>
        <?php
            $query = "SELECT * FROM pendidikan";
            $result = mysqli_query($conn, $query);
        ?>
        <table>
            <tr>
                <th>SD</th>
                <th>SMP</th>
                <th>SMK</th>
            </tr>
        <?php while($data = mysqli_fetch_array($result)): ?>    
            <tr>
                <td><?php echo $data['sd']?></td>
                <td><?php echo $data['smp']?></td>
                <td><?php echo $data['smk']?></td>
            </tr>
        <?php endwhile ?>    
        </table>

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
    </body>
</html>