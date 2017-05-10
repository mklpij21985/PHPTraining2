<?php
$a = 1;
$b = 0;
$c=0;
for($i = 1; $i <= 10; ++$i)
{
    $b = $a * $i;
    echo "{$a}  <tr>";

        for($j = 1; $j <= 10; ++$j)
        {
            $c =$b *$j ;
        echo $c . "<br>";
        }
        $a++;
}


?>
