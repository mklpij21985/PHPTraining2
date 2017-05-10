<?php

$b = 0;
$c = 10;
$d = 5;

for ($i = 0; $i < 15; $i++)
{

    $a = rand($b, $c);

    if($a == $d)
    {
        print ("同じ" . "<br>");
    }else
    {
        print( $a . "<br>") ;# code...
    }

}
 ?>
