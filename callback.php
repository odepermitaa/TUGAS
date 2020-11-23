<?php
$min = 17;
$d = [
    ["nama"=> "sinta", "umur"=> "7 tahun"],
    ["nama"=> "raffi", "umur"=> "18 tahun"],
    ["nama"=> "angel", "umur"=> "25 tahun"],
    ["nama"=> "putri", "umur"=> "15 tahun"],
    ["nama"=> "fahri", "umur"=> "10 tahun"],
    ["nama"=> "ayu", "umur"=> "40 tahun"],
    ["nama"=> "metri", "umur"=>"3 tahun"],
];

array_walk($d, function($nama) use ($min) {
    echo "nama : " . $nama['nama'] ."\n";
    echo "umur : " . $nama['umur'] ."\n";
    echo "status : ";
        if ($nama['umur'] >= $min) {
            echo "boleh mencari SIM\n\n\n";
        } else {
            echo "belum boleh mencari SIM\n\n\n";
        }
});




?>