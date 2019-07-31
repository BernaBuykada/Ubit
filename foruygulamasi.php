<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<br>
<hr>
  <?php
    
    $tek=0;
    $cift=0;

    for ($i=1; $i <= 11 ; $i++) {
        echo "$i. Sayı :".$i;
        
        if ($i%2==0) {
            echo " Bu sayı çift";
            $cift++;
        } else {
            echo " Bu sayı tek";
            $tek++;
        }
        echo "<br>";
        echo "<hr>";
    }
    echo "<hr>";
   
    ?>
    Çift sayı <?php echo $cift ?> adet var. <br>
    Tek sayı <?php echo $tek ?> adet var. <br>
</body>
</html>





