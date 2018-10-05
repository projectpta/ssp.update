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

		<!-- Heading -->
			<div id="heading" >
				<h1>EDIT</h1>
			</div>

		<!-- Main -->
			<div class="container">
  <h2>MAKLUMAT PELAWAT</h2>
<form method="post" action="pelawat.php">
<label>NAMA</label>
<input type="text" name="nama" />
<br />
<label>NO.KAD PENGENALAN / PASSPORT</label>
<input type="text" name="ic" />
<br />
<label>NO TEL</label>
<input type="text" name="no_tel" />
<br />
<label>KENDERAAN</label>
<input type="text" name="kenderaan" />
<br />
<label>NO PLAT KENDERAAN</label>
<input type="text" name="no_plat" />
<br />
<label>ATAS URUSAN:</label>
<input type="text" name="tujuan" />
<br />
<input type="submit" value="Insert">
</form>
</div>
		<!-- Footer -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>