<?php 
 
require_once 'db.php';
 
if($_POST) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE polis SET username = '$username', pass = '$pass' WHERE id = {$id}";
    if($connection->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='addguard.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connection->error;
    }
 
    $connection->close();
 
}
 
?>