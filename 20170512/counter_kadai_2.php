<?php

$i = 0;

$fp = fopen("count_2.csv", "r+" ,20);
$count = fgets($fp);
//$count = mb_convert_encoding($count, 'UTF-8', 'sjis-win');
rewind($fp);

$tom = date("Y m/d H:i");
//echo $tom . "<br>";
$days = explode(",", $count);
$days[0] = $days[0]++;
echo $days[0] . "<br>";

$tom = date("Y m/d H:i");
$days[1]  =  $tom;
$count = $days[1];


fputs($fp, $count);
fclose($fp);
?>
