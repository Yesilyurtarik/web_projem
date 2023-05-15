<?php
$kuladi = $_POST["username"];
$sifre = $_POST["password"];

if ($kuladi == "b191210070@ogr.sakarya.edu.tr" && $sifre == "6767") {
	echo '<div style="background-color: #480ca8; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
	<h1 style="color: white; text-align: center;">Hoşgeldiniz b191210070</h1>';
	
	?>
	<button style="padding: 10px 20px; display:flex; align-items: center; justify-content:center;" onclick="location.href='../anasayfa.html'">Anasayfa</button>
	<?php
}
else {
	header("location: ../index.html");
	die();
}



