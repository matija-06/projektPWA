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
  <a href="index.php">Home</a>
  <a href="login.php" class="active">Administracija</a>
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
<content>
	<section class="body-width">
	<?php session_start();  if ($_SESSION['level'] == 1) {
		echo "<h5 class='dobrodosli'>Dobro došli, <h1>" .$_SESSION['ime']. "</h1>Vaša razina je administrator</h5>";
		$dbc = mysqli_connect('localhost', 'root', '', 'projekt') or
		die('Error connecting to MySQL server.'.mysqli_connect_error());
  		define('UPLPATH', 'img/');
		$query = "SELECT * FROM clanak";
		$result = mysqli_query($dbc, $query);
		while($row = mysqli_fetch_array($result)) {
 
		  echo '<div class="container">
		  <form action="administracija.php" method="post">
		    <div class="row">
		      <div class="col-25">
		        <label for="naslov">Naslov</label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="naslov" name="naslov" placeholder="Naslov" value="'.$row['naslov'].'">
		      </div>
		    </div>
		    <div class="row">
		      <div class="col-25">
		        <label for="sazetak">Sazetak</label>
		      </div>
		      <div class="col-75">
		        <textarea name="sazetak" id="sazetak" cols="30" rows="10">'.$row['sazetak'].'</textarea>
		      </div>
		       <div class="col-25">
		        <label for="tekst">Tekst</label>
		      </div>
		      <div class="col-75">
		        <textarea name="tekst" id="tekst" cols="30" rows="10">'.$row['tekst'].'</textarea>
		      </div>
		         <div class="col-25">
		        <label for="slika">Slika</label>
		      </div>
		      <div class="col-75 admin-img-select">
		        <input type="file" class="input-text" id="slika" 
		value="'.$row['slika'].'" name="slika"/><img src="' . UPLPATH . 
		$row['slika'] . '" width=200px>

		      </div>
		    </div>

		    <div class="row">
		      <div class="col-25">
		        <label for="country">Kategorija</label>
		      </div>
		      <div class="col-75">
		        <select id="kategorija" name="kategorija" value="'.$row['kategorija'].'">
		          <option value="Sport">Sport</option>
		          <option value="Politika">Politika</option>
		          <option value="Glazba">Glazba</option>
		        </select>
		      </div>
		    </div>
		    <div class="row">
		      <div class="col-25">
		        <label for="subject">Prikazati vijest na stranici?</label>
		      </div>
		      <div class="col-75">';
				        if($row['arhiva'] == 0) {
				 echo '<input type="checkbox" name="arhiva" id="arhiva" class="col-75"/> 
				';
				 } else {
				 echo '<input type="checkbox" name="arhiva" id="arhiva" 
				checked/>';
				 }
				 echo '
		      </div>
		    </div>
		     <div class="row">
		      <input type="hidden" name="id" name="id" value="'.$row['id'].'">
		    </div>
		    <div class="row">
				<button type="submit" name="update" value="update" class="dugme"> 
				Izmijeni</button>
				 <button type="submit" name="delete" value="delete" class="dugme delete"> 
				Izbriši</button>
		    </div>
		  </form>
		</div>';
}

if(isset($_POST['delete'])){
 $id=$_POST['id'];
 $query = "DELETE FROM clanak WHERE id=$id ";
 $result = mysqli_query($dbc, $query);
}

if(isset($_POST['update'])){
$slika = $_POST['slika'];
$naslov=$_POST['naslov'];
$sazetak=$_POST['sazetak'];
$tekst=$_POST['tekst'];
$kategorija=$_POST['kategorija'];
$id=$_POST['id'];
if(isset($_POST['arhiva'])){
 $archive=1;
}else{
 $archive=0;
}


$query = "UPDATE clanak SET naslov='$naslov', sazetak='$sazetak', tekst='$tekst', 
slika='$slika', kategorija='$kategorija', arhiva='$archive' WHERE id=$id ";
$result = mysqli_query($dbc, $query);
}


   }

   if ($_SESSION['level'] == 0) {

    echo "<p class=dobrodosli>Dobro došli, ".$_SESSION['ime']. "</p>";
    echo "<p>Niste Administrator i ne možete pristupiti stranici 'Administracija'</p>";

	} ?>
			
	</section>
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