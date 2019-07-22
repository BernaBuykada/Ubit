<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php
// POST ve GET methodları
//farkları: post verileri gizli olarak gönderir, get değerleri adres satırında görünür
/* echo $_POST['ad'];
echo "<br>";
echo $_POST['soyad']; */

echo $_GET['ad']; 
echo "<br>";
echo $_GET['soyad']; 
?>

<form action="" method="GET"> 
	Ad <input type="text" name="ad" placeholder="Adınızı Giriniz">
	SoyAd <input type="text" name="soyad" placesholder="Soyadınızı Giriniz">

	<input type="submit" value="Formu gönder" name="">

</form>
<br>
<hr>





</body>
</html>