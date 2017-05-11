<?php
function addfive($num)
{
    $num += 5;
}
function addsix(&$num)
{
    $num += 6;
}

$orignum = 10;

addfive($orignum);
echo "元の値は　{$orignum}<br/>";

addsix($orignum);
echo "元の値は　{$orignum}<br/>";

?>
