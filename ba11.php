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
     <a class="navbar-brand" href="lamanutama.php">LAMAN UTAMA</a>
    </div>
    
      <ul class="nav navbar-nav">
      <li><a href="semakanrumah.php">SEMAKAN RUMAH</a></li>
      <li><a href="addguard.php">SUNTING PENGGUNA</a></li>
      <li><a href="addguard.php">ADUAN</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="../edit.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
     <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    </nav>

<h2></h2>

   <table class="table table-hover">
    <thead>
      <tr>
        <th>Book name</th>
        <th>Author</th>
        <th>Category</th>
        <th><th>
                <th><th>

        </tr>
    </thead>

<?php 

    $id = 1;
    while($info = mysql_fetch_array($data)) {
        $id++;
        Print "<tr>";
        Print" <td>".$info['name']."</td>";
        Print "<td>".$info['author']."</td>";
        Print  "<td>".$info['category']."</td>";
        Print  "<td>  <a href='editt.php?id=$id'>edit</a> </td>";
        Print  "<td>  <a href='delete.php?id=$id'>delete</a> </td>";
        Print " </tr>";

    } 

?>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

</body>
</html>
   

   
   <table class="table table-hover">
    <thead>
      <tr>
        <th>Book name</th>
        <th>Author</th>
        <th>Category</th>
        <th><th>
                <th><th>

        </tr>
    </thead>

<?php 

    $id = 0;
    while($info = mysql_fetch_array($data)) {
        $id++;
        Print "<tr>";
        Print" <td>".$info['name']."</td>";
        Print "<td>".$info['author']."</td>";
        Print  "<td>".$info['category']."</td>";
        Print  "<td>  <a href='editt.php?id=$id'>edit</a> </td>";
        Print  "<td>  <a href='delete.php?id=$id'>delete</a> </td>";
        Print " </tr>";

    } 

?>