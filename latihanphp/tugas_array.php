<?php

// data array numeric

// $name = array ("rizqy","rizal","rambo");

// echo $name[0];

// data array associative

// $daftar = array(
//     "nama"   => "lanting",
//     "harga"   => "Rp.1000" ,
//     "bentuk"   => "bulat",
//     "discount"   => "50%",
// );

// echo $daftar["nama"];

//  data array dimensional 
    
    $users = array(
        array ("luffy","sanji","usop","zoro"),
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

    echo  $users [0][3]."\n";
    echo $users [1]["nama"];
?>