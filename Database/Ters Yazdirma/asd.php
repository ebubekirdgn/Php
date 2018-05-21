<?php
$sayi=$_POST["s1"];
$a=$sayi;
$birler=$sayi%10;
$sayi=($sayi-$birler)/10;

$onlar=$sayi%10;
$sayi=($sayi-$onlar)/10;

$yuzler=$sayi%10;
$binler=($sayi-$yuzler)/10;

echo $a." = ".($binler*1000)." + ".($yuzler*100)." + ". ($onlar*10)." + ".$birler."    ". $a."<=>".$birler.$onlar."".$yuzler."".$binler;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<p>Bu Pro girilen sayıyı basamaklarına ayırır ve tersten yazar.</p>
<form action="asd.php" method="post">
 <p>Sayınız = 
   <input type="text" name="s1"  value="<?php echo $a ?>"/> 
   <input type="submit" value="T A M A M" />
 </p></form>
</body>
</html>
