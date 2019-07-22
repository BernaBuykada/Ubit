<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
 











 <?php
date_default_timezone_set('Europe/Istanbul'); //konum bildirme


$zaman="27-10-2017 19:08"; //manuel

$sonuc=explode(" ", $zaman);
echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<br>";

echo "Tarih : ".$sonuc[0]." Saat:.".$sonuc[1];
echo "<hr>";

//Date time zone ayarları ve anlık zaman alma

echo date("d-m-y h:i:s"); //day-month-year 
 







 ?>	

































</body>
</html>