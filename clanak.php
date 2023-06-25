<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PWA projekt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="header">
    <img class="logo" src="Foto/el-confidencial-logo.png" alt="el-confidencial-logo">
</header>
<nav class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="login.php">Administracija</a>
  <a href="unos.php">Unos</a>
  <a href="registracija.php">Registracija</a>
  <div class="dropdown">
    <button class="dropbtn">Kategorija 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sport.php">Sport</a>
      <a href="politika.php">Politika</a>
      <a href="zabava.php">Zabava</a>
    </div>
  </div> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <hr class="transparent-hr">
  <hr class="border">
</nav>


	<?php 
		 	$dbc = mysqli_connect('localhost', 'root', '', 'projekt') or
  			die('Error connecting to MySQL server.'.mysqli_connect_error());
			define('UPLPATH', 'img/');
			$query = "SELECT * FROM clanak where id='$_GET[id]'";
			$result = mysqli_query($dbc, $query);
			 $i=0;
			 while($row = mysqli_fetch_array($result)) {
			 	echo "<header class='kategorija'><h3>";
			 	echo $row['kategorija'];
			 	echo "</h3></header>";
        echo "<hr class='transparent-hr'";
			 	echo "<content><div class='content-clanak'>";
			 	echo "<h1>";
			 	echo $row['naslov']; 
				echo "</h1>";
        echo "<p>";
        echo $row['sazetak']; 
       echo "<p>";
				echo '<img class= "image-clanak" src="' . UPLPATH . $row['slika'] . '"';
				echo "<br><br>";
				echo '<br><br><p class="clanak-tekst">';
				echo $row['tekst'];
				echo "</p></content>";

			 }
	 ?>



<footer class="footer">
  <p>Matija Kurpez TVZ 2023. ©</p>
</footer>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>