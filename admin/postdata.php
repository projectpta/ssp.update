<?php

    $con = mysqli_connect('localhost','root','');

if(!$con)
{   
    echo 'not connected to server';
}
 if(!mysqli_select_db($con, 'condo'))
     
 {
     echo 'DATABASE NOT SELECTED';
 }

if (empty($_POST) === false) {
    $nama = $_POST['nama'];
    $ic = $_POST['ic'];
    $warganegara = $_POST['warganegara'];
    $bangsa = $_POST['bangsa'];
    $no_tel = $_POST['no_tel'];
    $emel = $_POST['emel'];
    $pekerjaan = $_POST['pekerjaan'];
    $kenderaan = $_POST['kenderaan'];
    $no_plat = $_POST['no_plat'];
    $member = $_POST['member'];
    //Execute the query

    //validation
    if (empty($nama) === true) {
        $error[] = "Sila isi nama pemilik.";
    }
    
    if (empty($error) === true) {
        $sql = "INSERT INTO butiran (nama,ic,warganegara,bangsa,no_tel,emel,pekerjaan,kenderaan,no_plat,member) 
        VALUES ('$nama','$ic','$warganegara','$bangsa','$no_tel','$emel','$pekerjaan','$kenderaan','$no_plat','$member')";

         if(mysqli_query($con,$sql))
         {
             echo 'Inserted';
         }
    } else {
        print_r($error);
    }
    header("refresh:2; url:edit.php");
}
?>