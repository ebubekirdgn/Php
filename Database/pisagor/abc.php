<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$cc=$_POST["c"];
?>
<form action="abc.php" method="post">
<center><br /><br />
Max Hipotonusu belirtin = <input type="text" name="c" value="<?php echo $cc; ?>"  />&nbsp;&nbsp;&nbsp;
<input type="submit" value="__BUL__"  />
<br /><br />

<?php
for($c=3; $c<=$cc; $c++ )
{
	for($b=1; $b<$c; $b++ )
	{
		for($a=1; $a<$b	; $a++ )
		{
			$toplam=$a*$a+$b*$b;
			
			if($toplam==($c*$c))
			{
			echo $a."<sup>2</sup> + ".$b."<sup>2</sup> = ".$c."<sup>2</sup> <br>";
			}
			
		}
	}
}
?>


</center></form>
</body>
</html>
