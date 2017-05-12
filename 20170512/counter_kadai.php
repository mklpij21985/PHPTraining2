<?php
/*$tom = date("Y-m-d H:i:s");

echo $tom;
*/
$fp = fopen("count.txt", "r+");
$we = fgets($fp, 10);
$we++;
if($we < 7)
{

}elseif($we == 7)
{
$we = 0;
}
rewind($fp);
fputs($fp, $we);
fclose($fp);

$week = ["月", "火", "水", "木", "金", "土", "日"];
if($we < 7)
{
$week_a = $week[$we];
echo "(" . $week_a . ")";
//$we++;
}else
{
$we = 0;
$week_a = $week[$we];
echo $week_a ;

}
/*$day = fopen("day.txt", "r+");
$month = fopen("month.txt", "r+");
$count  = fgets($fp, 5);
if($day == 31 && $month != 12)
{
    $day = 1;
    $month++;
}elseif($fp == 30 && $month !=12 && $month == 4 || $month == 6 || $month == 9 || $month == 11)
{
    $day = 1;
    $month++
}elseif($fp == 31 && $month !=12)
{
    $day = 1;
    $month++
}elseif($day == 31 && $month == 12)
{
    $day = 1;
    $month = 1;
}elseif($day == 28 && $month == 2 && $uruu != 0)
{
    $day = 1;
    $month++;
}elseif ($day == 29 && $month == 2)
{
    $day = 1;
    $month++;
}
$counnt ++;
rewind($fp);
fputs($fp, $count);
*/



?>
