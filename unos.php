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
<content class="forma">
<div class="container">
  <form action="insert.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="naslov">Naslov:</label>
      </div>
      <div class="col-75">
        <input type="text" id="naslov" name="naslov">
        <div id="porukaTitle"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sazetak">Sažetak:</label>
      </div>
      <div class="col-75">
        <textarea name="sazetak" id="sazetak" cols="30" rows="10"></textarea>
        <div id="porukaAbout"></div>
      </div>
       <div class="col-25">
        <label for="tekst">Tekst:</label>
      </div>
      <div class="col-75">
        <textarea name="tekst" id="tekst" cols="30" rows="10"></textarea>
        <div id="porukaContent"></div>
      </div>
         <div class="col-25">
        <label for="slika">Slika:</label>
      </div>
      <div class="col-75 admin-img-select">
        <input type="file" class="input-text" id="slika"  name="slika"/>
        <div id="porukaSlika"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="kategorija">Kategorija:</label>
      </div>
      <div class="col-75">
        <select id="kategorija" name="kategorija">
          <option value="none" selected disabled hidden>Odaberi</option>
          <option value="Sport">Sport</option>
          <option value="Politika">Politika</option>
          <option value="Zabava">Zabava</option>
        </select>
        <div id="porukaKategorija"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="prikaz">Prikazati vijest na stranici?</label>
      </div>
      <div class="col-75">
        <input type="checkbox" name="prikaz" id="prikaz" value="true">
      </div>
    </div>
    <div class="row">
    <button type="submit" name="submit" value="submit" class="dugme" id="slanje"> Submit</button>
    </div>
  </form>
</div>
</content>

<footer class="footer">
  <p>Matija Kurpez TVZ 2023. ©</p>
</footer>



<script type="text/javascript">
 // Provjera forme prije slanja
 document.getElementById("slanje").onclick = function(event) {
 
 slanjeForme=true;
 // Naslov vjesti (5-30 znakova)
 var poljeTitle = document.getElementById("naslov");
 var title = document.getElementById("naslov").value;
 if (title.length < 5 || title.length > 30) {
 slanjeForme = false;
 poljeTitle.style.border="1px dashed red";
 document.getElementById("porukaTitle").innerHTML="Naslov vijesti mora imati između 5 i 30 znakova!<br>";
 } else {
 poljeTitle.style.border="1px solid green";
 document.getElementById("porukaTitle").innerHTML="";
 }

 
 // Kratki sadržaj (10-100 znakova)
 var poljeAbout = document.getElementById("sazetak");
 var about = document.getElementById("sazetak").value;
 if (about.length < 10 || about.length > 100) {
 slanjeForme = false;
 poljeAbout.style.border="1px dashed red";
 document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
 } else {
 poljeAbout.style.border="1px solid green";
 document.getElementById("porukaAbout").innerHTML="";
 }
  
 // Sadržaj mora biti unesen
 var poljeContent = document.getElementById("tekst");
 var content = document.getElementById("tekst").value;
 if (content.length == 0) {
 slanjeForme = false;
 poljeContent.style.border="1px dashed red";
 document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
 } else {
 poljeContent.style.border="1px solid green";
10
 document.getElementById("porukaContent").innerHTML="";
 }
 // Slika mora biti unesena
 var poljeSlika = document.getElementById("slika");
 var pphoto = document.getElementById("slika").value;
 if (pphoto.length == 0) {
 slanjeForme = false;
 poljeSlika.style.border="1px dashed red";
 document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
 } else {
 poljeSlika.style.border="1px solid green";
 document.getElementById("porukaSlika").innerHTML="";
 }
 // Kategorija mora biti odabrana
 var poljeCategory = document.getElementById("kategorija");
 if(document.getElementById("kategorija").selectedIndex == 0) {
 slanjeForme = false;
 poljeCategory.style.border="1px dashed red";
 
document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
 } else {
 poljeCategory.style.border="1px solid green";
 document.getElementById("porukaKategorija").innerHTML="";
 }
 
 if (slanjeForme != true) {
 event.preventDefault();
 }
 
 };
 </script>

 
</body>
</html>