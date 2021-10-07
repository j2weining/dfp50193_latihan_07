<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        *{
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
    #array
    $nama = "CHAI WEI NING";
    echo $nama[1];
    echo $nama[3];
    ?>
    <hr>

    <?php
    $pelajar[0] = 'CHAI';
    $pelajar[1] = 'WEI';
    $pelajar[2] = 'NING';

    for($x=0; $x <3;$x++){
        echo $pelajar[$x] . ' ';
    }
    echo "<hr>";

    #foreach
    foreach ($pelajar as $pel){
        echo $pel . ' ';
    }
    echo "<hr>";

    #implode() @ join()
    $pelajars = implode(' ', $pelajar);
    echo $pelajars;
    echo "<hr>";

    #explode()
    $ptss = 'POLITEKNIK TUANKU SYED SIRAJUDDIN';
    $kata = explode(' ', $ptss);
    echo $kata[2];
    echo '<hr>';

    $senarai = 'Ali, Lim, Raju, Thomas';
    echo "<p>Senarai Asal: $senarai</p>";
    $ahli = explode(',', $senarai);
    echo '<pre>', print_r($ahli), '</pre>';
    ?>
    <ol>
        <?php
        foreach($ahli as $nama){
            echo"<li>$nama</li>";
        }
        ?>
    </ol>
    <hr>

    <?php
    #strcmp()
    $citacita = 'Doktor';
    $hasil = strcmp($citacita, 'Doktor');
    if($hasil == 0){
        echo 'Sama';
    } elseif($hasil < 0) {
        echo 'Kurang';
    } else {
        echo 'Lebih';
    }
    ?>
    
</body>
</html>