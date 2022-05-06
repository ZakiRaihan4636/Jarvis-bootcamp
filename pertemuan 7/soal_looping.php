<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 
            dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
    // Lakukan Looping Di Sini

    $x = 2;

    echo "<h4>Looping Pertama</h4>";
    while ($x <= 20) {
        if ($x % 2 === 0) {
            echo $x . " - " . "I love PHP" . "<br>";
        }
        $x++;
    }

    echo "<h4>Looping Kedua</h4>";
    while ($x >= 2) {
        if ($x % 2 === 0) {
            echo $x . " - " . "I love PHP" . "<br>";
        }
        $x--;
    }

    echo "<h3>Soal No 2 Looping Array Modulo </h3>";
    /* 
            Soal No 2
            Looping Array Module
            Carilah tambah tiap anggka pada array dengan 5.
            Tampung ke dalam array baru bernama $rest 
        */

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);
    // Lakukan Looping di sini

    $i = 0;

    while ($i <= 56) {
        $result = $numbers[$i] + 5;
        $i++;
    }



    echo "<br>";
    echo "Array tambah 5 adalah:  ";
    print_r($result);
    echo "<br>";

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";
    /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
            Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
    $items = [
        ["id" => '001',  "name" => 'Keyboard Logitek', "price" => 60000, "description" => 'Keyboard yang mantap untuk kantoran', "source" => 'logitek.jpeg'],
        ["id" => '002', "name" =>  'Keyboard MSI', "price" => 300000, "description" => 'Keyboard gaming MSI mekanik', "source" => 'msi.jpeg'],
        ["id" => '003',  "name" => 'Mouse Genius', "price" => 50000, "description" => 'Mouse Genius biar lebih pinter', "source" => 'genius.jpeg'],
        ["id" => '004',  "name" => 'Mouse Jerry', "price" => 30000, "description" => 'Mouse yang disukai kucing', "source" => 'jerry.jpeg']
    ];

    foreach ($items as $item) {
        echo "<pre>";
        print_r($item);
        echo "</pre>";
    }


    // Output: 

    echo "<h3>Soal No 4 Asterix </h3>";
    /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */

    echo "Asterix: " . "<br>";

    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br />";
    }

    echo "<br>";
    ?>

</body>

</html>