<?php

$user = array(
    'username'  => array('apip', 'dimas', 'wawan', 'andik'),
    'email'     => array('apip@gmail.com', 'dimas@gmail.com', 'wawan@gmial.com', 'andik@gmail.com'),
    'name'      => array('Apip Apriyanto', 'Dimas Damai', "Wawan Setiawan", 'Andik Purnomo'),
    'hoby'      =>array(
        array('sepak bola', 'traveling', 'swimming'),
        array('fustal', 'swimming'),
        array('sepak bola', 'swimming')
    ),
    'address' => array('Sambongsari','Weleri', 'penyangkringan', 'Pegandon')
    );

// var_dump($user);

// Tampilkan
// Nama : Apip Apriyanto
// Username : apip
// Email : apip@gmail.com
// hoby : traveling

echo "Nama : ". $user ['name'][0]."\n";
echo "Username : ". $user ['username'][0]."\n";
echo "Email : ". $user [ 'email'][0]."\n";
echo "Hoby : ". $user ['hoby'][0][1]."\n";
echo "Address : ". $user['address'][0]."\n";

echo "\n";

echo "Nama : ". $user['name'][2]."\n";
echo "Username : ". $user['username'][2]."\n";
echo "Email : ". $user['email'][2]."\n";
echo "Hoby : ". $user['hoby'][2][1]."\n";
echo "Address : ". $user['address'][2]."\n";

echo "\n";

echo $user ['name'][2]."\n";
echo $user ['username'][2]."\n";
echo $user ['email'][2]."\n";
echo $user ['hoby'][2][1]."\n";
echo $user ['address'][2];
?>