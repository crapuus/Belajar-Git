
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Kumpulan data array</title>
  </head>
  <body>
<div class="container">
  <div class="card bg-info mt-5 mb-3" style="max-width: ;">
    <div class="card-header">Daftar manusia</div>
      <div class="card-body">
          <table class="table" >
           <tr>
              <td>ID  </td>
              <td>Nama  </td>
              <td>Address  </td>
              <td>Status Warga  </td>
              <td>Created at  </td>
              <td>Update at  </td>
              <td></td>
            </tr>

              <?php
              $members = array(
                array('id' => '1','name' => 'Anis','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:09','updated_at' => '2020-10-16 07:36:55'),
                array('id' => '2','name' => 'Sabar Adiguno','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:22','updated_at' => '2020-10-09 14:54:22'),
                array('id' => '3','name' => 'Ngatini Suraji','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:36','updated_at' => '2020-10-09 14:54:36'),
                array('id' => '4','name' => 'M. Daim','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:54:50','updated_at' => '2020-10-09 14:54:50'),
                array('id' => '5','name' => 'Taswin','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:00','updated_at' => '2020-10-09 14:55:00'),
                array('id' => '6','name' => 'Yanto Jebres','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:11','updated_at' => '2020-10-09 14:55:11'),
                array('id' => '7','name' => 'Mat Rojali','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:21','updated_at' => '2020-10-09 14:55:21'),
                array('id' => '8','name' => 'Subali','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:35','updated_at' => '2020-10-09 14:55:35'),
                array('id' => '9','name' => 'Ron Handoyo','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:55:44','updated_at' => '2020-10-09 14:55:44'),
                array('id' => '10','name' => 'Dwi Setiawan','address' => 'Sambongsari','status_warga' => '0','created_at' => '2020-10-09 14:56:17','updated_at' => '2020-10-09 14:56:17'),
                array('id' => '18','name' => 'Mulyadi hadi','address' => 'Sambongsari Rt1 Rw2','status_warga' => '0','created_at' => '2020-10-21 02:11:07','updated_at' => '2020-10-21 02:11:07')
              );

              foreach($members as $member) {
              ?>


            <tr>
              <td> <?php echo $member['id']; ?></td>
              <td> <?php echo $member['name']; ?>  </td>
              <td> <?php echo $member['address']; ?>  </td>
              <td> <?php  echo $member['status_warga']; ?> </td>
              <td> <?php  echo $member['created_at']; ?> </td>
              <td> <?php  echo $member['updated_at']; ?></td>
              <td>
                <button class='btn btn-danger btn-circle'>delete</button>
                <button class='btn btn-dark'>clear</button>
              </td>
            </tr> 

                <?php } ?>

          </table>
    </div>
  </div>
</div>
  
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>