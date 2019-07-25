<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<?php
//Switch Case
if (isset($_POST['notunuz'])) //isset post değişkenlerinin tanımlı olup olmadığına bakar
$not=$_POST['not'];
{
    echo "Notunuz :".$not=$_POST['not']; echo " ";

    switch ($not) {
        case '5':
        echo "Pekiyi";
        break;

        case '4':
        echo "İyi";
        break;

        case '3':
        echo "Orta";
        break;

        case '2':
        echo "Geçtiniz";
        break;

        case '1':
        echo "Kaldınız";
        break;
        
        default:
        echo "Tanımsız sonuç";
        break;
    }
    echo "<hr>";
}
?>
<form action="" method="post">
    Notunuzu Giriniz <input type="number" max="5" min="1" name="not">
    <input type="submit" value="Sonuç" name="notunuz">
    </form>
</body>
</html>