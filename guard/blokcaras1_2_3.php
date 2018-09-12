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
<style>
.accordion {
    background-color: burlywood;
    color: rebeccapurple;
    cursor: pointer;
    padding: 30px;
    width: 100%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 20px;
    transition: 0.4s;
    margin:0 auto
}

.active, .accordion:hover {
    background-color: gainsboro; 
}

.panel {
    padding: 0 50px;
    display: none;
    background-color: white;
    overflow: hidden;
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
      <li><a href="pelawat.php">PELAWAT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
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

<button class="accordion">ARAS 1</button>
<div class="panel">
<h2>
  
  <button>B-C-1-1</button>
  <button>B-C-1-2</button>
  <button>B-C-1-3</button>
  <button>B-C-1-4</button>
  <button>B-C-1-5</button>
   <button>B-C-1-6</button>
    <button>B-C-1-7</button>
     <button>B-C-1-8</button>
  
</h2>
</div>


<button class="accordion">ARAS 2</button>
<div class="panel">

<h2>
  
  <button>B-C-2-1</button>
 <button>B-C-2-2</button>
  <button>B-C-2-3</button>
  <button>B-C-2-4</button>
  <button>B-C-2-5</button>
  <button>B-C-2-6</button>
  <button>B-C-2-7</button>
  <button>B-C-2-8</button>
  
</h2>
  
  
</div>

<button class="accordion">ARAS 3</button>
<div class="panel">
  <h2>
  
  <button>B-C-3-1</button>
 <button>B-C-3-2</button>
  <button>B-C-3-3</button>
  <button>B-C-3-4</button>
  <button>B-C-3-5</button>
  <button>B-C-3-6</button>
  <button>B-C-3-7</button>
    <button>B-C-3-8</button>

  
</h2>
</div>

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