<?php
$b = 0;
$c = 100;

for($i = 0; $i < 30; $i++)
{
$a = rand($b, $c);
if($a == 15 || $a == 40 || $a == 100)
{
echo $data[$a] = $a . "<br>";
}
}
?>
