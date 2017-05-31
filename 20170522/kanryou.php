<?php

$toiawase_ban = 0;
$sname = htmlspecialchars($_POST["sname"], ENT_QUOTES, "UTF-8");
$fname = htmlspecialchars($_POST["fname"], ENT_QUOTES, "UTF-8");
$seibetu = htmlspecialchars($_POST["seibetu"], ENT_QUOTES, "UTF-8");
$address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
$denwa = htmlspecialchars($_POST["denwa"], ENT_QUOTES, "UTF-8");
$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8");
$ans_all = htmlspecialchars($_POST["ans_all"], ENT_QUOTES, "UTF-8");
$cate = htmlspecialchars($_POST["cate"], ENT_QUOTES, "UTF-8");
$naiyouimp = htmlspecialchars($_POST["naiyouimp"], ENT_QUOTES, "UTF-8");
$naicount2 = htmlspecialchars($_POST["naicount"], ENT_QUOTES, "UTF-8");

$file_name = "kadai.csv";
$fp = fopen($file_name, 'a');
$banget = file("kadai.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
mb_convert_variables("UTF-8", "SJIS-win", $banget);
$naicount = explode(",", end($banget));

$banser = end($naicount);
$gettoiban = explode(",", $banget[count($banget) -1 - $banser]);
$toiawase_ban = $gettoiban[0];
$toiawase_ban++;
$toiawase_ban = str_pad($toiawase_ban, 12, 0, STR_PAD_LEFT);

$toi_array = [$toiawase_ban, $sname, $fname, $seibetu, $address, $denwa, $mail, $ans_all, $cate, $naiyouimp, $naicount2];
mb_convert_variables("SJIS-win", "UTF-8", $toi_array);


$write_end = fputcsv($fp, $toi_array);
fclose($fp);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
        <link rel = "stylesheet" href = "kanryou.css">
        <h1>お問い合わせが完了しました。</h1>
        <p>お問い合わせ番号は   <a> <?php echo "{$toiawase_ban}"?></a>  です。</p>
        <p><a>返信には1週間ほどかかる場合がございます。</a></p>
        <p>    <a>気長にお待ちください。</a></p>
    </body>
</html>
