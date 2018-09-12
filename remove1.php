<?php 
 
require_once 'db.php';
 
if($_GET) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM kerani WHERE id = {$id}";
    $result = $connection->query($sql);
    $data = $result->fetch_assoc();
 
    $connection->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Remove Member</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="remove1.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <button type="submit">PADAM MAKLUMAT</button>
    <a href="addguard.php"><button type="button">KEMBALI</button></a>
</form>
 
</body>
</html>
 
<?php
}
?>


<?php 
 
require_once 'db.php';
 
if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE FROM `kerani` WHERE id = {$id}";
    if($connection->query($sql) === TRUE) {
        echo "<p>DATA BERJAYA DIPADAM!!</p>";
        echo "<a href='addguard.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connection->error;
    }
 
    $connection->close();
}
 
?>