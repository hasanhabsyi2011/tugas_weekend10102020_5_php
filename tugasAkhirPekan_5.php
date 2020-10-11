<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 5</title>
  </head>
  <body>

    <?php

    $r = 14;
    //rumus lingkaran: phi*r*r
    function luasLingkaran($nilai){
      return pi() * pow($nilai, 2);
    };


   ?>



    <h3>Soal Nomor 5</h3>
    <p>Sebuah lingkaran memiliki jari-jari sebesar 14 cm.
      Tentukan luas lingkaran
      tersebut?</p>

    <br><br>
    <h3>Jawaban</h3>

    <p><b>Luasnya adalah : <?php echo luasLingkaran($r); ?> </b></p>


  </body>
</html>
