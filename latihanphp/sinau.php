<?php

// function text() {

// }

// text();


// function getPassword() {
//     echo "password";
// }

// getPassword();


// function getName($nama) {
//   return $nama;
// }

//  echo getName("name");


function getUser($status,$nama){
  echo $status."\n";

  echo getName($nama);
} 

function getName($nama){
  echo $nama;
}

getUser("boos","rizqy");


// function user($user){
//   for($num = 0; $num < $user; $num++){
//     echo $num."\n";
//   }
// }

// user(10);

// function user($user){
//   if($user < 10){
//     echo "tampil 10";
//   }elseif($user <  15){
//     echo "tampilan 15";
//   }else{
//     echo "tampillo 20";
//   }
// }

// user(1);




// $members = array(
//   array('id' => '1','name' => 'Anis','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:09','updated_at' => '2020-10-16 07:36:55'),
//   array('id' => '2','name' => 'Sabar Adiguno','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:22','updated_at' => '2020-10-09 14:54:22'),
//   array('id' => '3','name' => 'Ngatini Suraji','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:36','updated_at' => '2020-10-09 14:54:36'),
//   array('id' => '4','name' => 'M. Daim','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:50','updated_at' => '2020-10-09 14:54:50'),
//   array('id' => '5','name' => 'Taswin','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:00','updated_at' => '2020-10-09 14:55:00'),
//   array('id' => '6','name' => 'Yanto Jebres','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:11','updated_at' => '2020-10-09 14:55:11'),
//   array('id' => '7','name' => 'Mat Rojali','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:21','updated_at' => '2020-10-09 14:55:21'),
//   array('id' => '8','name' => 'Subali','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:35','updated_at' => '2020-10-09 14:55:35'),
//   array('id' => '9','name' => 'Ron Handoyo','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:44','updated_at' => '2020-10-09 14:55:44'),
//   array('id' => '10','name' => 'Dwi Setiawan','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:56:17','updated_at' => '2020-10-09 14:56:17'),
//   array('id' => '18','name' => 'Mulyadi hadi','address' => 'Sambongsari Rt1 Rw2','status_warga' => '0','created_at' => '2020-10-21 02:11:07','updated_at' => '2020-10-21 02:11:07')
// );



// function user($user){
//   for($num = 0; $num < sizeof($user);$num++){
//     echo "Halo : ". $user[$num]["name"]."\n";
//   }
// }

// user($members);
?>