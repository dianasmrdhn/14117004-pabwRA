<!DOCTYPE html>
<html>
    <head>
        <title>Harga bet</title>
    </head>
    <body>
        <form action="Latihan2.php" method="get">
            <input type="text" name="nama"></input><br/>
            <input type="text" name="color"></input><br/>
            <input type="submit" name="submit" value="Submit"></input>
        </form>

        <?php
            function HitungNama($nama,$color="red")
            {
                $jumlah=strlen($nama);
                if ($jumlah<=10){
                    $jumlah = $jumlah*300;
                }elseif ($jumlah>10 and $jumlah<=20){
                    $jumlah = $jumlah*500;
                }elseif ($jumlah>20){
                    $jumlah = $jumlah*700;
                }
                echo "Harga bet : RP. $jumlah";
                echo "<br>";
                echo '<font color"'.$color.'">'.$nama.'</font><br>';

            }
            HitungNama($_GET['nama'],$_GET['color']);
            ?>
        </body>
    </html>        
