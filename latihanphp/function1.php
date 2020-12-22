<?php

// function getname ($name) {
//     echo "Nama : " .$name."\n";
// }

// getname("rizqy");


// function getstatus ($status){
//     return "Nama : ".$status."\n";
// }

//  echo getstatus("boos");


 function getName ($nama,$harga,$bentuk) {
    echo "Nama : ".$nama."\n";
    echo  "Rp.5000" .harga($harga)."\n";
    echo  "BUlat".bentuk($bentuk);
 }
 function harga($harga) {
    echo "Harga : ";
}
function  bentuk($bentuk) {
    echo "Bentuk : ";
}


 getname("burger","rp.5000","bulat");