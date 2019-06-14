<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Schalter</title>
</head>
GPIO 23 schalten:
<form method="get" action="pool.php">
<input type="submit" value="Licht ein" name="Lichtein">
<input type="submit" value="Licht aus" name="Lichtaus">
</form>
<?php
$modeon18 = exec("gpio mode 23 out");
if(isset($_GET["Lichtein"])){
$val = exec("gpio write 23 1");
echo "Licht an";
}
else if(isset($_GET["Lichtaus"])){
$val = exec("gpio write 23 0");
echo "Licht aus";
}

echo "<hr/>";
$val = exec("gpio read 23");
//$val = "test";
echo " gpio23 hat $val ";
print($val);
echo " <hr />"

//$value = trim(@shell_exec("cat /sys/class/gpio/gpio17/value"));
//print($value);


//exec("gpio -1 mode 23 in");
//$state = exec("gpio -1  read 23");
//echo "<p>Pin 21 des J8-Headers hat den Zustand $state";

?>
</body>
</html>
