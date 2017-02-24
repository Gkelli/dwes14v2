<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>U2A02 - Fundamentos de PHP</title>
</head>
<body>
<?php include 'header.php'?>
<?php 
echo $hoy = date("F j, Y, g:i a");
echo "</br>";
echo $hoy = date("m.d.y");
echo "</br>";
echo $hoy = date("j, n, Y"); 
echo "</br>";
echo $hoy = date("Ymd"); 
echo "</br>";
echo $hoy = date('h-i-s, j-m-y, it is w Day');
?>

</body>
</html>