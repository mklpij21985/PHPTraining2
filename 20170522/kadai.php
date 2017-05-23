<?php
$sname = "";
$fname = "";
$bangou1 = "";
$bangou2 = "";
$bangou3 = "";
$mailaddress = "";
$domain = "";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(!empty($_POST["sname"]) || !empty($_POST["fname"]))
    {
        $sname = $_POST["sname"];
        $fname = $_POST["fname"];
    }
    else
    {
        $name_err = "名前が入力されていません。";
    }
    if(!empty($_POST["bangou1"]) || !empty($_POST["bangou2"]) || !empty($_POST["bangou3"]))
    {
        $bangou1 = $POST["bangou1"];
        $bangou2 = $POST["bangou2"];
        $bangou2 = $POST["bangou2"];
    }
    else
    {
        $bangou_err = "電話番号が入力されていません。";
    }
    if(!empty($_POST["mailaddress"]) || !empty($_POST["domain"]))
    {
        $mailaddress = $_POST["mailaddress"];
        $domain = $_POST["domain"];
    }
    else
    {
        $mail_err =  "メールアドレスが入力されていません。";
    }
}
?>


<!DOCTYPE html>

<html lang = "jp">
    <head>
        <meta charset = "UTF-8">
        <title>お問い合わせ</title>
        <meta name = "robots" content = "noindex, nofollow" />
    </head>
    <body>
        <h1>お問い合わせ</h1>

        <?php if (!isset($sname) && !isset($fname)) : ?>
            <form action = "" method = "post">
        <p>姓    <input type = "text" name = "sname" value = "<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8");?>"></p>
        <p>名    <input type = "text" name = "fname" value = "<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8");?>"></p>
         <p style="color:red;"><?php echo $name_err; ?></p>


        <p>
            性別    男<input type = "radio" name = "seibetu" value = "男">
            女<input type = "radio" name = "seibetu" value = "女">
            不明<input type = "radio" name = "seibetu" value = "不明">
        </p>

        <p>
            住所  <input type = "text" name = "address" size = "50">
        <p>

        <p>
            電話番号    <input type = "number" name = "bangou_1" min = "0" max = "999" value = "<?php echo htmlspecialchars($bangou1, ENT_QUOTES, "UTF-8");?>"> -
                    <input type = "number" name = "bangou_2" min = "0" max = "9999" value = "<?php echo htmlspecialchars($bangou2, ENT_QUOTES, "UTF-8");?>"> -
                    <input type = "number" name = "bangou_3" min = "0" max = "9999" value = "<?php echo htmlspecialchars($bangou3, ENT_QUOTES, "UTF-8");?>">
                    <p style = "color:red;"><?php echo $bangou_err; ?></p>
        </p>

        <p>
            メールアドレス <input type = "text" name = "mailaddress" value = "<?php echo htmlspecialchars($mailaddress, ENT_QUOTES, "UTF-8");?>">
                            @  <input type = "text" name = "domain"value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>">
                            <p style = "color:red;"><?php echo $mail_err; ?></p>
        </p>

        <p>
            どこで知ったか     雑誌<input type = "checkbox" = name = "ans_a">
                                新聞<input type = "checkbox" = name = "ans_b">
        </p>

        <p>
            質問カテゴリ      <input type = "text" name = "situmoncat">
        </p>

        <p>
            質問内容<br>      <textarea type = "text" name = "naiyou" cols = "30" rows = "5">
            </textarea>
        </p>

        <p><input type = "submit" name = "送信"></p>


    </form>
<?php else :?>

<?php endif; ?>
    </body>
</html>
