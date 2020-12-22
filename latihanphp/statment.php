<?php

// statment if 


//  $angka1 = 1;
//  $angka2 = 2;

// if ( $angka1 == $angka2 ){
//     // echo "jika benar akan di tampilkan";
// }

// statment    if else 
 

// if ( $angka1 !== $angka2 ) {
//     echo "jika benar akan di tampilkan";
// } else {
//     echo "jika salah tidak di tampilkan";
// }

// statment elseif 

// if ( $angka1 != $angka2 ) {
//     echo "jika benar akan di tampilkan";
// } elseif ($angka1 === $angka2 ) {
//     echo "jika variable 1 salah maka  akan di tampilkan";
// } else {
//     echo "jika salah tidak akan ditampilkan";
// }

// statment switch 


$uang = 15000;
$value = "paket4";




switch ($value) {
    case "paket" :
        $harga =$uang - 10000;
        echo "ayam geprek dan minuman harga : ".$harga;
    break;

    case "paket1" :
        $harga = $uang - 5000;
        echo "ban dalam + ongkos kerja ".$harga;
    break;

    case "paket2" :
        $harga = $uang - 7000;
        echo "makanan enak ".$harga;
    break;

    case "paket3" :
        $harga = $uang -16000;
        echo "diskon alit ".$harga;
    break;

     case "paket4" :
        $harga = $uang - 2.5;
        echo "diskkon cilik ".$harga;
    break;
    
    case "paket5" :
        $harga = $uang / 3;
        echo "diskon edan ".$harga;
    break;

    default :
        echo "random";
}
?>