<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>お問い合わせ内容確認</h1>
<link rel = "stylesheet" href = "end.css">
        <form action = "kanryou.php" method = "post">
        <div class = "name">
        <p>姓<?php echo htmlspecialchars($_POST["sname"], ENT_QUOTES, "UTF-8"); ?></p>
        <p>名<?php echo htmlspecialchars($_POST["fname"], ENT_QUOTES, "UTF-8"); ?></p>
        </div>
        
        <div>
        <p>性別<?php echo htmlspecialchars($_POST["seibetu"], ENT_QUOTES, "UTF-8"); ?></p>
        </div>
        <div>
        <p>住所<?php echo htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8"); ?></p>
        </div>
        <div>
        <p> 電話番号<?php echo htmlspecialchars($_POST["bangou_1"], ENT_QUOTES, "UTF-8"); ?> -
            <?php echo htmlspecialchars($_POST["bangou_2"], ENT_QUOTES, "UTF-8"); ?> -
            <?php echo htmlspecialchars($_POST["bangou_3"], ENT_QUOTES, "UTF-8"); ?>
        </p>
        </div>
        <div>
        <p>メールアドレス<?php echo htmlspecialchars($_POST["mailaddress"], ENT_QUOTES, "UTF-8"); ?>
         @ <?php echo htmlspecialchars($_POST["domain"], ENT_QUOTES, "UTF-8"); ?>
        </p>
        </div>
        <div>
        <p>どこで知ったか
            <?php
            if(isset($_POST["ans"]))
            {
            $ans = $_POST["ans"];
            $ans_all = implode("、", $ans);
            echo htmlspecialchars("{$ans_all}", ENT_QUOTES, "UTF-8");
            }
            else
            {
                echo "未選択";
            }
            ?>
        </p>
        </div>
        <div>
        <p>質問カテゴリ<?php echo htmlspecialchars($_POST["cate"], ENT_QUOTES, "UTF-8"); ?></p>
        </div>
        <div>
        <p>質問内容<?php echo htmlspecialchars($_POST["naiyou"], ENT_QUOTES, "UTF-8"); ?></p>
        </div>
        <div>
        <input type = "submit" value = "確認">

        <form action = "kadai_1.php" method = "post">
            <input type="hidden" name="hoge" value="<?php echo $hoge ?>">
            <input type = "button" onclick = "history.back()" value="戻る">
        </form>
        </div>

    </form>
    <p><a href = "kadai_1.php">最初から書き直します</a></p>
    </body>
</html>
<?php
/*
$input = file_get_contents('kadai.csv');
$input = mb_convert_encoding($input, "UTF-8", "SJIS-win");

$tmp = tmpfile();
$meta = stream_get_meta_data($tmp);
fwrite($tmp, $input);

$csv = new SplFileObject($meta['uri']);
$csv -> setFlags(SplFileObject::READ_CSV);
$output = new SplFileObject('kadai1.csv', 'a');

    foreach($csv as $_POST => $toi)
    {
        $output -> fputcsv($toi);
    }

$output = file_get_contents('kadai.csv');
$output = mb_convert_encoding($output, 'SJIS-win', 'UTF-8');
file_put_contents('kadai1.csv', $output);

$csv = null;
$output = null;
*/
?>
