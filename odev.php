<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
<title></title>
</head>
<body>


<?php
$toplam=0;
$dizi=[
	[10, 20, "toplama"],
	[20, 6, "cikarma"],
	[4, 9, "toplama"],
	[36, 6, "bolme"],	
	[13, 20, "toplama"],
	[230, 6, "cikarma"],
	[44, 9, "toplama"],
	[56, 6, "bolme"],	
	[6, 20, "toplama"],
	[8, 6, "cikarma"],
	[14, 19, "toplama"],
	[26, 6, "bolme"],	 
	[20, 18, "cikarma"],
	[64, 19, "cikarma"],
	[16, 2, "bolme"]
];


?>
<table align="center" border="1" >
<tr>
    <td>sayı 1</td>
    <td>sayı 2</td>
    <td>işlem</td>
    <td>sonuç</td>
</tr>
<?php foreach($dizi as $satir):?>
<tr>
    <td> <?php echo $satir[0] ?></td>
    <td><?php echo $satir[1] ?></td>
    <td><?php echo $satir[2] ?></td>
    <td>
    <?php

$sonuc=0;
if($satir[2]=="toplama")
{
    $sonuc=$satir[0] + $satir[1];
}
elseif($satir[2]=="cikarma")
{
    $sonuc=$satir[0] - $satir[1];
}
elseif($satir[2]=="bolme")
{
    $sonuc=$satir[0] / $satir[1];
}
$toplam=$toplam+$sonuc;
echo is_int($sonuc) ? $sonuc : number_format($sonuc,2);
   ?>  
    </td>
</tr>
<?php endforeach ?>

<tr>
<td colspan="3">
toplam
</td>
<td> <?php echo number_format($toplam,2) ?> </td>
</tr>

</table>
</body>
</html>