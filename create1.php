<?php 
 
require_once 'db.php';
 
if($_POST) {
    $user = $_POST['user'];
    $pas = $_POST['pas'];
 
    $sql = "INSERT INTO kerani (user, pas, active) VALUES ('$user', '$pas', 1)";
    if($connection->query($sql) === TRUE) {
        echo "<p>REKOD PENGGUNA BERJAYA DI TAMBAH !</p>";
        echo "<a href='create1.php'><button type='button'>Back</button></a>";
        echo "<a href='addguard.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connection->connection_error;
    }
 
    $connection->close();
}
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Generic Page - Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <style type="text/css">
        fieldset {
           width: 50%;
            margin-left: 50px;
            background-color: transparent;
        }
 
        table tr th {
            padding-top: 20px;
            font-size: 17px;
        }
    </style>
 
</head>
<body class="is-preload">

    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="lamanutama.php">LAMAN UTAMA</a>
    </div>
    
      <ul class="nav navbar-nav">
      <li><a href="semakanrumah.php">SEMAKAN RUMAH</a></li>
      <li><a href="addguard.php">SUNTING PENGGUNA</a></li>
      <li><a href="addguard.php">ADUAN</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
     <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="button ">Submit</button>
    </form>
    </div>
    </nav>
     
 
<fieldset>
    <h2><legend>Add Member</legend></h2>
 
    <form action="create1.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>NAMA PENGGUNA</th>
                <td><input type="text" name="user" placeholder="Masukkan nama pengguna" /></td>
            </tr>     
            <tr>
                <th>KATA LALUAN</th>
                <td><input type="text" name="pas" placeholder="Masukkan kata laluan" /></td>
            </tr>
            <tr>
                <td><button type="submit">SIMPAN REKOD</button></td>
                <td><a href="addguard.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>