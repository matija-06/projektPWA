<!DOCTYPE html>
<html lang="hr">
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
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="administracija.php">Administracija</a>
  <a href="unos.php">Unos</a>
  <a href="login.php">Login</a>
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
<content class="index-content">
   <?php

   session_start();
    $dbc = mysqli_connect('localhost', 'root', '', 'projekt') or
    die('Error connecting to MySQL server.'.mysqli_connect_error());

   
        if (isset($_POST["submit"])) {
            $kime = '';
            if( isset( $_POST['kime'])) {
              $kime = $_POST['kime']; 
            }

            $password = '';
            if( isset( $_POST['password'])) {
              $password = $_POST['password']; 
            }

            $hashed_password = password_hash($password, CRYPT_BLOWFISH);


            $query = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
            $stmt = mysqli_stmt_init($dbc);

            if (mysqli_stmt_prepare($stmt, $query)) {
                mysqli_stmt_bind_param($stmt, 's', $kime);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                }
                mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, 
                $levelKorisnika);
                mysqli_stmt_fetch($stmt);

                if (password_verify($_POST['password'], $lozinkaKorisnika) && 
                mysqli_stmt_num_rows($stmt) > 0) {
                 $uspjesnaPrijava = true;
                echo "Dobro Došli "

               
                 if($levelKorisnika == 1) {
                 $admin = true;

                 }
                 else {
                 $admin = false;
                 }

                 $_SESSION['$ime'] = $imeKorisnika;
                 $_SESSION['$level'] = $levelKorisnika;
                 } else {
                 $uspjesnaPrijava = false;
                 }
                 
                }

    
?>

</content>

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

 