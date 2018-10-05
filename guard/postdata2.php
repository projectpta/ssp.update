<?php

    $connection = mysqli_connect('localhost','root','');

if(!$connection)
{   
    echo 'not connected to server';
}
 if(!mysqli_select_db($connection, 'condo'))
     
 {
     echo 'DATABASE NOT SELECTED';
 }

if (empty($_POST) === false) {
     $nama = $_POST['nama'];
      $ic = $_POST['ic'];
      $no_tel = $_POST['no_tel'];
      $kenderaan = $_POST['kenderaan'];
      $no_plat = $_POST['no_plat'];
      $tujuan = $_POST['tujuan'];
    //Execute the query

    //validation
    if (empty($nama) === true) {
        $error[] = "Sila isi nama pemilik.";
    }
    
    if (empty($error) === true) {
        $sql = "INSERT INTO visitor (nama,ic,no_tel,kenderaan,no_plat,tujuan) 
    VALUES ('$nama','$ic','$no_tel','$kenderaan','$no_plat','$tujuan')";

         if(mysqli_query($connection,$sql))
         {
             echo 'Inserted';
         }
    } else {
        print_r($error);
    }
    header("refresh:2; url:pelawat.php");
}
?>