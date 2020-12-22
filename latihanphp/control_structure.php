<?php

// Type data Control Structure

// Selection Statements

// if 

$num = 0;


if($num < 10 ){
    echo " nol kurang dari sepuluh";
}

echo "\n";

// if else

$number = 10;

if($number > 0){
    echo "bagus";
}else{
    echo "jelek";
}

echo "\n";

// elseif

$nomor = 70;

if($nomor < 50){
    echo "baik";
}elseif($nomor < 100){
    echo "luamayan";
}else{
    echo "buruk";
}

echo "\n";

// swicth


switch(35){
    case "35" :
        echo "diskon 35%";
    break;

    case "50" :
        echo "diskon 50%";
    break;

    case "75" :
        echo "diskon 75%";
    break;

 default:{
     echo "tidak diskon";
 }
}

echo "\n";

//   Interative Statements

// while 

$num = 0;

while($num < 10){
    echo " angka : ".$num."\n";
    $num++;
}

// do while

$nomor = 0;

do{
    echo "angka : ". $nomor ."\n";
    $nomor++;
}while($nomor < 15);

echo "\n";

// for

for($angka = 0; $angka < 20;$angka++){
    echo "angka : ".$angka ."\n";
}

echo "\n";

// foreach

$users = array(
    array(
        "nama"     =>"rizqy",
        "umur"     =>"10",
        "status"   =>"freelancer",
    ),
    array(
        "nama"     =>"rizal",
        "umur"     =>"11",
        "status"   =>"freelancer",
    ),
    array(
        "nama"     =>"ridwan",
        "umur"     =>"12",
        "status"   =>"freelancer",
    ),
    array(
        "nama"     =>"ridho",
        "umur"     =>"13",
        "status"   =>"freelancer",
    ),
);

// var_dump($users);

foreach($users as $user){
    echo "angka : ".$user["nama"]."\n";
    echo "angka : ".$user["umur"]."\n";
    echo "angka : ".$user["status"]."\n";
    echo "\n";
}
?>