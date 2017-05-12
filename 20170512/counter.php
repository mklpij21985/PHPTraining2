<?php
$fp = fopen("count.txt", "r+");
$count = fgets($fp, 10);
$count++;
rewind($fp);
fputs($fp, $count);
fclose($fp);
echo "あなたは" . $count . "人目のお客様です";


//chmod("/20170512/20170512/count.txt",0666);

?>
