<?php

$buah1 = "mangga";
$buah2 = "manggis";

function buah($b){
    return $b;
}

$namabuah = function() use ($buah2){
    return $buah2;
};

function banyak($c, $f){
    echo $c." ".$f."\n";
}

banyak("ada 10", buah("jeruk"));
banyak("ada 5", buah($buah1));

?>

