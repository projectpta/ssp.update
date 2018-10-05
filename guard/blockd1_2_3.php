<?php require_once 'db.php'; ?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="is-preload">

    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="semakanrumah.php">LAMAN UTAMA</a>
    </div>
    
      <ul class="nav navbar-nav">
      <li><a href="addguard.php">SUNTING PENGGUNA</a></li>
      <li><a href="aduan.php">ADUAN</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
     <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    </nav>
<h1> ARAS 1</h1>
 <br>
  <div class="manageMember">
    <a href="create.php"><button type="button">ARAS 2</button></a>
    <a href="create.php"><button type="button">ARAS 3</button></a>
    <a href="create.php"><button type="button">ARAS 4</button></a>
    <a href="create.php"><button type="button">ARAS 5</button></a>
    <a href="create.php"><button type="button">ARAS 6</button></a>
    <br>
    <br>
    <a href="create.php"><button type="button">TAMBAH</button></a>
    
    <table border="1" cellspacing="0" cellpadding="0">
           <h2> <thead>
            <tr>
                <th>NAMA</th>
                <th>NO TEL</th>
                <th>SUNTING</th>
            </tr>
        </thead> </h2>
        <tbody>
            
               <?php
            $sql = "SELECT * FROM butiran WHERE id = 1";
            $result = $connection->query($sql);
 
            if($result->num_rows == 1) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['nama']."</td>
                        <td>".$row['no_tel']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='btn'>KEMASKINI</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>PADAM</button></a>
                            <a href='lihat.php?id=".$row['id']."'><button type='button'>SEMAK</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>

        </tbody>
    </table>
</div>

</body>
</html>
   