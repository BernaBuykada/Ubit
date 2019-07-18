<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8/>
<title></title>
</head>kjiÜ;İÜğp"/5tyhmy.  
<body>
 
    <table align="center" border="3" width="700" cellspacing="5" cellpadding="10">
       <tr >
	
<td aling="center" colspan='5'><center><b>ÇARPIM TABLOSU</b></center> </td> 

</tr>
        <tbody>
            <tr>
 
<?php
 
    for ($i=1; $i<=10;$i++) //10 ile çarpmak için
    {
        echo '<td>';
            for ($j=1; $j<=10;$j++) //basamaklar için
            {
                echo $i.' x '.$j.' = '. $i*$j.'<br />';
            }
        echo '</td>';
        if($i%5==0) echo '</tr> <tr>';
    }
 
?>
              </tr>
        </tbody>
    </table>
        </body>
</html>









