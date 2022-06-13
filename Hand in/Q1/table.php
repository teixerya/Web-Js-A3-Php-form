
<html>
<head><title>Table</title></head>
<body>
<?php
$n1=$_GET['num1'];
$n2=$_GET['num2'];
if(empty($n1))
{
echo "Parameter 1 is missing<br>";
 $n1=10;
}
if(empty($n2))
{
echo "Parameter 2 is missing<br>";
 $n2=10;
}
if (is_numeric($n1) and is_numeric($n2))

{
echo"<table border='1'>";
for ($i=1; $i<=$n2; $i++)
{
$mul=$n1*$i;
 echo "<tr><td>$n1*$i = $mul</td></tr>";
 }
echo "</table>";
}
else
{
     echo"Invalid data";
}
?>
</body>
</html>