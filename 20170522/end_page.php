<?php

$sname = htmlspecialchars($_POST["sname"], ENT_QUOTES, "UTF-8");
$fname = htmlspecialchars($_POST["fname"], ENT_QUOTES, "UTF-8");
$seibetu = htmlspecialchars($_POST["seibetu"], ENT_QUOTES, "UTF-8");
$address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
$bangou_1 = htmlspecialchars($_POST["bangou_1"], ENT_QUOTES, "UTF-8");
$bangou_2 = htmlspecialchars($_POST["bangou_2"], ENT_QUOTES, "UTF-8");
$bangou_3 = htmlspecialchars($_POST["bangou_3"], ENT_QUOTES, "UTF-8");
$bangou_all = [$bangou_1, $bangou_2, $bangou_3];
$denwa = implode("-", $bangou_all);
$mailaddress = htmlspecialchars($_POST["mailaddress"], ENT_QUOTES, "UTF-8");
$domain = htmlspecialchars($_POST["domain"], ENT_QUOTES, "UTF-8");
$mail_d = [$mailaddress, $domain];
$mail = implode("@", $mail_d);
$cate = htmlspecialchars($_POST["cate"], ENT_QUOTES, "UTF-8");
$naiyou = htmlspecialchars($_POST["naiyou"], ENT_QUOTES, "UTF-8");
$naiyouexp = explode("\n", $naiyou);
$naiyouimp = implode("/*/", $naiyouexp);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <link rel = "stylesheet" href = "end.css">
        <h1>お問い合わせ内容確認</h1>

        <form action = "kanryou.php" method = "post">
        <div class = "name">
        <p>姓<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8"); ?>
            <input type = "hidden"  name = "sname" value = "<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        <p>名<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8"); ?>
                    <input type="hidden" name = "fname" value = "<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8"); ?>"></p>
        </div>

        <div>
        <p>性別<?php echo htmlspecialchars($seibetu, ENT_QUOTES, "UTF-8"); ?>
                    <input type="hidden" name = "seibetu" value = "<?php echo htmlspecialchars($seibetu, ENT_QUOTES, "UTF-8"); ?>">
                </p>
        </div>
        <div>
        <p>住所<?php echo htmlspecialchars($address, ENT_QUOTES, "UTF-8"); ?>
            <input type="hidden" name = "address" value = "<?php echo htmlspecialchars($address, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        </div>
        <div>
        <p> 電話番号<?php echo htmlspecialchars($denwa, ENT_QUOTES, "UTF-8"); ?>
            <input type="hidden" name = "denwa" value = "<?php echo htmlspecialchars($denwa, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        </div>
        <div>
        <p>メールアドレス<?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?>
                        <input type="hidden" name = "mail" value = "<?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        </div>
        <div>
        <p>どこで知ったか
            <?php
            if(isset($_POST["ans"]))
            {
            $ans = $_POST["ans"];
            $ans_all = implode("、", $ans);
            echo htmlspecialchars($ans_all, ENT_QUOTES, "UTF-8");
            }
            else
            {
                $ans_all = "未選択";
                echo "未選択";
            }
            ?>
                        <input type="hidden" name = "ans_all" value = "<?php echo htmlspecialchars($ans_all, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        </div>
        <div>
        <p>質問カテゴリ<?php echo htmlspecialchars($cate, ENT_QUOTES, "UTF-8"); ?>
            <input type="hidden" name = "cate" value = "<?php echo htmlspecialchars($cate, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        </div>
        <div>
        <p>質問内容<?php echo htmlspecialchars($_POST["naiyou"], ENT_QUOTES, "UTF-8"); ?>
            <input type="hidden" name = "naiyouimp" value = "<?php echo htmlspecialchars($naiyouimp, ENT_QUOTES, "UTF-8"); ?>">
        </p>
        </div>
        <div>
        <input type = "submit" name = "kakunin" value = "確認">

        <form action = "kadai_1.php" method = "post">
            <input type="hidden" name="hoge" value="<?php echo $hoge ?>">
            <input type = "button" onclick = "history.back()" value="戻る">
        </form>
        </div>

    </form>
    <p><a href = "kadai_1.php">最初から書き直します</a></p>
    </body>
</html>
