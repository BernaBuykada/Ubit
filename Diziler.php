<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>

<?php
//DİZİLER

$dizi=array("emrah","yüksel",10,20,30,40);
//echo $dizi;
print_r($dizi);  //dizilerin indislerini görüntülememize yardımcı olur.
echo "<br>";

echo $dizi[0]; echo "<br>";
echo $dizi[1]; echo "<br>";
echo $dizi[2]; echo "<br>";
echo $dizi[3]; echo "<br>";
echo $dizi[4]; echo "<br>";
echo $dizi[5]; echo "<br>";

echo "<br>";
echo "<pre>";
print_r($dizi);
echo "</pre>";


//Dizilerde sık kullanılan hazır fonksiyonlar
//sort => küçükten büyüğe sıralar

$dizi=array(10,9,8,7,6,12,5,4,3,2,1);

echo "<pre>";
sort($dizi);
print_r($dizi);
echo "</pre>";

//rsort => büyükten küçüğe sıralar

$dizi=array(10,9,8,7,6,12,5,4,3,2,1);

echo "<pre>";
rsort($dizi);
print_r($dizi);
echo "</pre>";

//in_array => dizi içerisinde aradığımız değerin olup olmadığını denetler. Varsa 1 değerini döndürür.

$dizi=array("a","b","c","d");

echo $sonuc=in_array("z",$dizi);

if($sonuc)
{
    echo "var";
}
else
{
    echo "yok";
}

echo "<br>";
//implode dizi değerlerini birleştirmeye yarar.

$dizi=array("a","b","c","d");

echo $sonuc=implode(",",$dizi); //glue neyse aralarına koyar
echo $sonuc;


//explode değişkeni parçalayarak dizi haline getirir.

$zaman="27-10-2017 19:08";
$sonuc=explode(" ",$zaman);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "<br>";
echo "Tarih :".$sonuc[0]." Saat :".$sonuc[1];











?>


</body>
