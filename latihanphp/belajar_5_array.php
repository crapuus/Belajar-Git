<?php

$user = array(
        'nama' => array(
                'sutiyem',
                'suriyah',
                'sireng'
        ),
        'usia' => array(
                12,
                24,
                50
        ),
        'alamat' => array(
                'njetis',
                'njetak',
                'tumbrep'
        )
        );

        // var_dump($user);

        echo "Nama : ". $user['nama'][1]."\n";
        echo "Usia : ". $user["usia"][1]."\n";
        echo 'Alamat : '. $user['alamat'][1]."\n";

        echo "\n";

        echo "Nama : ". $user['nama'][0]."\n";
        echo "Usia : ". $user['usia'][2]."\n";
        echo "Alamat : ". $user['alamat'][2]."\n";


?>