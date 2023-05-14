<?php
$kuladi = $_POST["username"];
$sifre = $_POST["password"];

if ($kuladi == "b191210070@ogr.sakarya.edu.tr" && $sifre == "6767") {
	echo "Hoşgeldiniz b191210070";
	?>
	<button onclick="location.href='../anasayfa.html'">Anasayfa</button>
	<?php
}
else {
	header("location: ../index.html");
	die();
}



