<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<!-- echo komutu (ekrana yazma) -->
<?php echo "berna büyükada"; ?>

<!-- print komutu (ekrana yazma) -->
<?php print "berna büyükada"; ?>
 
<?php 
#tek satırlık yorum satırı
//bu bir yorum satırıdır
/* birden fazla satırlık orum satırı
*/
 ?>
<hr>

 <?php 
// Birleştirme operatörü (.)
 echo "Udemy Öğrencisi"."Berna Büyükada";
  ?>
<br>
<?php 
// Değişkenler
echo $ad="berna";
/*
-Değişkenler $ işareti ile başlar.
-Değişkene değer ataması yapılırken = işareti kullanılır
-Değişkene metinsel ifadeler aktarılırken " " veya ' ' kullanılabilir.
-Değişkene integer sayısal değer aktarılırken direkt olarak yazılabilir.
-Değişkenlerde ufak büyük harf ayrımı vardır.
-Değişkenlere rakam ile başlanamaz. Rakam ile bitirilebilir.
-Değişkenlerde boşluk bırakılamaz.
-Değişkenlerde türkçe karakter kullanılamaz.
*/
?>
<br>
<?php
//Değişkenlerde birleştirme
$ad="berna";
$soyad="büyükada";
echo $ad.$soyad;
?>

<?php
$ad="Berna";
$soyad="Büyükada";
$no=1500;

echo "<h1>Bilgilerim<h1>";
echo "<hr>";

echo "Adınız ve Soyadınız ........:" .$ad." ".$soyad;
echo "<br>";
echo "Numaranız ..................:" .$no;

?>

<?php
echo "<br>"; echo "<br>"; echo "<hr>";
// Matematiksel/Toplama işlemi
echo "Toplama İşlemi";
$numara1=50;
$numara2=13;
$topla=$numara1+$numara2;
echo "<br>";
echo "$numara1 + $numara2 = $topla";
echo "<hr>";
?>

<?php 
//Çıkarma işlemi
echo "Çıkarma İşlemi";
$numara1=58;
$numara2=13;
$topla=$numara1-$numara2;
echo "<br>";
echo "$numara1 - $numara2 = $topla";
echo "<hr>";
?>


<?php 
//Çarpma işlemi
echo "Çarpma İşlemi";
$numara1=7;
$numara2=12;
$topla=$numara1*$numara2;
echo "<br>";
echo "$numara1 x $numara2 = $topla";
echo "<hr>";
?>

<?php 
//Bölme işlemi
echo "Bölme İşlemi";
$numara1=69;
$numara2=3;
$topla=$numara1/$numara2;
echo "<br>";
echo "$numara1 / $numara2 = $topla";
echo "<hr>";
?>







</body>
</html>