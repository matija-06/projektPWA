<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PWA projekt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
if( isset( $_POST['submit'])) {

    $naslov = '';
    if( isset( $_POST['naslov'])) {
    $naslov = $_POST['naslov']; 
	} 

	$sazetak = '';
	    if( isset( $_POST['sazetak'])) {
	    $sazetak = $_POST['sazetak']; 
	} 

	$vijesti = '';
	    if( isset( $_POST['vijesti'])) {
	    $vijesti = $_POST['vijesti']; 
	} 

	$kategorija = '';
	    if( isset( $_POST['kategorija'])) {
	    $kategorija = $_POST['kategorija']; 
	} 

	$slika = '';
	    if( isset( $_POST['slika'])) {
	    $slika = $_POST['slika']; 
	}

	$prikaz = '';
	    if( isset( $_POST['prikaz'])) {
	    $prikaz = $_POST['prikaz']; 
	}
} 

    



 ?>
</body>
</html>