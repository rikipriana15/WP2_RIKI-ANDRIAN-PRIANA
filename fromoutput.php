<!DOCTYPE html>
<html>
<head>
	<title>from output</title>
</head>
<body>
	<h2>Hasil Hitung Rumus</h2>
<?php
$rumus  = $_POST ['rumus'];
$nilai1 = $_POST ['nilai1'];
$nilai2 = $_POST ['nilai2'];
$persegipanjang = ($nilai1 * $nilai2);
$segitiga = (1/2*($nilai1 * $nilai2));

if ($nilai1 == 0 && $nilai2 == 0){
	echo "Tidak ada hasilnya";
}
elseif ($rumus == 'Persegi Panjang'){
	echo "<br>Nilai a adalah  ", $nilai1;
	echo "<br>Nilai b adalah  " ,$nilai2;
	echo "<br>Rumus Yang Dipilih adalah = ", $rumus;
	echo "<br>Hasil Perhitungan Rumus = ", $persegipanjang;
}
else {
	echo "<br>Nilai a adalah  ", $nilai1; 
	echo "<br>Nilai b adalah  ", $nilai2; 
	echo "<br>Rumus Yang Dipilih adalah ", $rumus;
	echo "<br>Hasil Perhitungan Rumus adalah ", $segitiga;
}
?>
</body>
</html>