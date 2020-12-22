<?php

// Data type grether than (Lebih  dari)


$angka1= 7;
$angka2= 6;

if ( $angka1 > $angka2 ){
    echo 'true';
}else {
    echo 'false';
}

// Data type Less Than (kurang dari )

$angka1= 5;
$angka2= 6;

if($angka1 < $angka2){
    echo 'true';
}else {
    echo 'false';
}

// Data type greater than equal to ( lebih besar sama dengan )

$angka1= 3;
$angka2= 3;

if($angka1 >= $angka2 )
{
    echo 'true';
}  
else {
    echo 'false';
}

// Data type less than equal to ( kurang dari sama  dengan)

$angka1=2;
$angka2=10;

if ($angka1 <= $angka2){
    echo 'true';
}else{
    echo 'false';
}

// Data type and ( Dianggap benar jika kedua syarat benar )

$angka1=3;
$angka2=6;

if($angka1 > 1 && $angka2 < 10 ) {
    echo 'true';
}else {
    echo 'false';
}

// Data type or (Dianggap benar jika salah satu syarat benar)

$angka1=2;
$angka2=6;

if($angka1 < 5 || $angka2 >1){
    echo '1';
}else {
    echo '2';
}

// Data type xor ( Dianggap benar jika salah satu syarat benar tapi tidak keduanya benar)

$angka1=2;
$angka2=11;

if($angka1 > 1 xor $angka2 <10){
    echo 'true';
}else{
    echo 'false';
}

// Data type not ( dianggap benar jika nilainya tidak sama )

$angka1=2;
if($angka1 !=3){
    echo 'true';
}else{
    echo 'false';
}
?>