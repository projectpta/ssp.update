<?php 
 
require_once 'db.php';
 
if($_POST) {
    $user = $_POST['user'];
    $pas = $_POST['pas'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE kerani SET user = '$user', pas = '$pas' WHERE id = {$id}";
    if($connection->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='edit1.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='addguard.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connection->error;
    }
 
    $connection->close();
 
}
 
?>