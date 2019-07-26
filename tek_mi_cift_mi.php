<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php
//Formdan girilen sayının tek ya da çift olduğunu bulma
if (isset($_POST['notislemi'])){
    echo "Sayı : ".$not=$_POST['not']; echo " - ";
    if ($not%2) {
        echo "Bu sayı tektir.";
    }
    else {
        echo "Bu sayı çifttir.";
    }
}
?>
<hr>

<form action="" method="post">
    Sayı Girin : <input type="text" name="not" placeholder="Sayı girin">
    <button type="submit" name="notislemi">Sonuçlandır</button>
    </form>

</body>
</html>
