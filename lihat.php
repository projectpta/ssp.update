<?php require_once 'db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
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
        .manageMember {
            width: 50%;
            margin-left: 10px;
        }
 
        table {
    cursor: pointer;
    padding: 30px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 20px;
    transition: 0.4s;
    margin-right: 100px;
    justify-content: center;
            
        }
    
    btn{
        background-color: chocolate
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
   
   <h1>SENARAI PENGAWAL</h1>
  <div class="manageMember">
    <a href="create.php"><button type="button">Add Member</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
           <h2> <thead>
            <tr>
                <th>NAMA</th>
                <th>KATA LALUAN</th>
                <th>SUNTING</th>
            </tr>
        </thead> </h2>
        <tbody>
            <?php
            $sql = "SELECT * FROM polis WHERE active = 1";
            $result = $connection->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['username']."</td>
                        <td>".$row['pass']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='btn'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
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
<br>
<h2>KERANI</h2>
<div class="manageMember">
    <a href="addguard.php"><button type="button">KEMBALI</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
       
           <h2> <thead>
            <tr>
                <th>NAMA</th>
                <th>KATA LALUAN</th>
                <th>SUNTING</th>
            </tr>
        </thead> </h2>
        <tbody>
            <?php
            $sql = "SELECT * FROM kerani WHERE active = 1";
            $result = $connection->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['user']."</td>
                        <td>".$row['pas']."</td>
                        <td>
                            <a href='edit1.php?id=".$row['id']."'><button type='btn'>Edit</button></a>
                            <a href='remove1.php?id=".$row['id']."'><button type='button'>Remove</button></a>
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

<!-- /container -->
  </body>
</html>