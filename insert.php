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
  <a href="index.php">Home</a>
  <a href="login.php">Administracija</a>
  <a href="unos.php"  class="active">Unos</a>
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
<content>
<?php 
  $dbc = mysqli_connect('localhost', 'root', '', 'projekt') or

    die('Error connecting to MySQL server.'.mysqli_connect_error());
if( isset( $_POST['submit'])) {


    if( isset( $_POST['naslov'])) {
    $naslov = $_POST['naslov']; 
  } 

  $sazetak = '';
      if( isset( $_POST['sazetak'])) {
      $sazetak = $_POST['sazetak']; 
  } 

  $vijesti = '';
      if( isset( $_POST['tekst'])) {
      $vijesti = $_POST['tekst']; 
  } 
  $kategorija = '';
      if( isset( $_POST['kategorija'])) {
      $kategorija = $_POST['kategorija']; 
  } 
  
  if(isset($_POST['prikaz'])){
   $arhiva=1;
  }else{
   $arhiva=0;
  }

  $slika = '';
      if( isset( $_POST['slika'])) {
      $slika = $_POST['slika']; 
  }


  $date=date('d.m.Y.');

  $query = "INSERT INTO clanak (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$date', '$naslov', '$sazetak', '$vijesti', '$slika', '$kategorija', '$arhiva')";
  $result = mysqli_query($dbc, $query) or die('Error querying databese.');
  mysqli_close($dbc);

  echo "<h1 class='clanak-dodan'>Članak uspješno dodan!</h1>";
} 



 ?>
</content>
<footer class="footer">
  <p>Matija Kurpez TVZ 2023. ©</p>
</footer>


</body>
</html>


