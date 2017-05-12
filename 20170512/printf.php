<?php
$score = 95;
printf("得点は %d 点です", $score);
echo "<br>";
$year = 2017;
$month = 5;
$day = 12;

printf("今日は%04d年%02d月%02d日です。", $year, $month, $day);
$format = "日本では%04d年%02d月%02d日です。<br/>";
printf($format, $year, $month, $day);

$month = "May";

$format = "英語なら・・・・%2\$s %\$02d %1\$04d";
printf($format, $year, $month, $day);
?>
