<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php
/*
 İF KOŞULU
==		=> eşit ise
===		=> aynı ise
<		=> küçük ise
>		=> büyük ise
<=		=> küçük yada eşit ise
>=		=> büyük yada eşit ise
                                                                      
*/

$say=6;

if ($say==5)
{
	echo "Bu sayı 5'tir.";
}
elseif ($say<=5)
{
    echo "5 ya da daha küçük.";
}
elseif ($say>=5)
{
    echo "5 ya da daha büyük.";
}
else 
{
    echo "Başka bir şey.";
}

?>

</body>
</html>