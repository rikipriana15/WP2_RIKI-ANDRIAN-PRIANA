<!DOCTYPE html>
<html>
<head>
	<title>from input</title>
</head>
<body>
	<h2>Rumus-Rumus</h2>

<form action="fromoutput.php" method="POST">
<table border = '1' cellpadding="5" cellspacing="3">
	<tr>
		<td>Nilai1</td>
		<td><input type="text" name="nilai1"></td>
	</tr>
	<tr>
		<td>Nilai2</td>
		<td><input type="text" name="nilai2"></td>
	</tr>
	<td colspan="50" style="text-align: center;">
		<input type="radio" name="rumus" value="Segitiga">Segitiga<br>
		<input type="radio" name="rumus" value="Persegi Panjang">Persegi panjang
	</td>
</table>
		<input type="submit" value="Hitung"><a href="fromoutput.php"></a>
		<input type="reset" value="Batal">
</body>
</html>