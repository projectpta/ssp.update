<?php 
 
$localhost = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "condo"; 
 
// create connection 
$connection = new mysqli($localhost, $username, $password, $dbname); 
 
// check connection 
if($connection->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
     //echo 'SAMBUNGAN KE PANGKALAN DATA BERJAYA';
}
 
?>