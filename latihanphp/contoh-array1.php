<?php

$user = array(
    'nama' => array ('tarjo','acong','blonos','daimnen'),
    'email' => array ('tarjo@gmail.com','acong@gmail.com','blonos@gmail.com','daimen@gmail.com'),
    "username" => array ('tarjo','acong','blonos','daimen'),
    "hoby" => array (
        array('makan','minum','tidur'),
        array('makan','ngegame','tidur'),
        array('sepak bola','bolavoli','tidur')
    ),
    "alamat" => array('bontet','gerlang','bandung','siwarak')
    );

    // var_dump ($user)

    echo "Nama : ". $user['nama'][3]."\n";
    echo "Email : ". $user['email'][3]."\n";
    echo "Username : ". $user['username'][1]."\n";
    echo "Hoby : ". $user['hoby'][0][2]."\n";
    echo "Alamat : ". $user['alamat'][1]."\n";
?>