<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.0.2
 */

/**
 * Database `sim`
 */

/* `sim`.`users` */
$users = array(
  array('id' => '1','name' => 'Administrator Apt','email' => 'administrator@apt.com','email_verified_at' => '2020-11-16 07:24:21','password' => '$2y$10$SQLSsAtVh/nNYtnI6uuybucvleY01i7h3cMc5MgshoBIs9drjy1H.','remember_token' => NULL,'created_at' => '2020-11-16 07:24:21','updated_at' => '2020-11-16 07:24:21'),
  array('id' => '2','name' => 'Admin Apt','email' => 'admin@apt.com','email_verified_at' => '2020-11-16 07:24:21','password' => '$2y$10$ziEUxKU.7ufW9OzvOmI1tudbmBTu2gpPdkTKyYDeABnR.4Xfn.ePa','remember_token' => NULL,'created_at' => '2020-11-16 07:24:21','updated_at' => '2020-11-16 07:24:21'),
  array('id' => '3','name' => 'Teacher Apt','email' => 'teacher@apt.com','email_verified_at' => '2020-11-16 07:24:21','password' => '$2y$10$lrR8vhZBTpkLdYXkoIjv9OsPSivTZoS.3C9CKWxJANQdzpZ6VoUwK','remember_token' => NULL,'created_at' => '2020-11-16 07:24:21','updated_at' => '2020-11-16 07:24:21'),
  array('id' => '4','name' => 'Student Apt','email' => 'student@apt.com','email_verified_at' => '2020-11-16 07:24:21','password' => '$2y$10$o4BFF/IW9uqAY/DpzG77LOBPiawXeg.okl/5pOsg7mm3HTsvbScwS','remember_token' => NULL,'created_at' => '2020-11-16 07:24:22','updated_at' => '2020-11-16 07:24:22'),
  array('id' => '5','name' => 'Parent Apt','email' => 'parent@apt.com','email_verified_at' => '2020-11-16 07:24:22','password' => '$2y$10$ebMGa9di1Fp6un8BOxkPqeUS.v6kI2nN7C6MqUA3LqZC2XhkKjXKq','remember_token' => NULL,'created_at' => '2020-11-16 07:24:22','updated_at' => '2020-11-16 07:24:22'),
  array('id' => '6','name' => 'Teacher 1','email' => 'teacher1@apt.com','email_verified_at' => '2020-11-16 07:24:22','password' => '$2y$10$MB1hWjKHAWxKBBtXvmJy9uI9Idl4Q8pnUyrkD4uj6/zmpBZBcQ0Ky','remember_token' => NULL,'created_at' => '2020-11-16 07:24:22','updated_at' => '2020-11-16 07:24:22'),
  array('id' => '7','name' => 'Teacher 2','email' => 'teacher2@apt.com','email_verified_at' => '2020-11-16 07:24:22','password' => '$2y$10$hzaClmesRRTuxhDmDsL5XO4Z94glCNwfqVHPuvEaeYeJ.ayDYsJWy','remember_token' => NULL,'created_at' => '2020-11-16 07:24:22','updated_at' => '2020-11-16 07:24:22'),
  array('id' => '8','name' => 'Student 1','email' => 'student1@apt.com','email_verified_at' => '2020-11-16 07:24:22','password' => '$2y$10$hQw.quaLwuiEX93bGvZr9e2Dr24wXHOg48zdl17leBsPVEr5OQ/qG','remember_token' => NULL,'created_at' => '2020-11-16 07:24:23','updated_at' => '2020-11-16 07:24:23'),
  array('id' => '9','name' => 'Student 2','email' => 'student2@apt.com','email_verified_at' => '2020-11-16 07:24:23','password' => '$2y$10$.EbqiwSkdwYw4bt64r2M6eRA7gU4tZAkFDAKJ27sBJ6f5cV6y6sIW','remember_token' => NULL,'created_at' => '2020-11-16 07:24:23','updated_at' => '2020-11-16 07:24:23')
);

// $num = 0;

// do{
//     echo "lhoooo".$users[$num]["id"]."\n";
//     $num++;
// }while($num < sizeof($users));

foreach($users as $user) {
  echo "lhoooo".$user['name']."\n";
}

?>