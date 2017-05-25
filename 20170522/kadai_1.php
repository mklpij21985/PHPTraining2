<?php
$sname = "";
$fname = "";
$seibetu = "";
$bangou1 = "";
$bangou2 = "";
$bangou3 = "";
$mailaddress = "";
$domain = "";
$sousin = "false";


$name_err = "";
$seibetu_err = "";
$bangou_err = "";
$mail_err = "";


if ($_SERVER["REQUEST_METHOD"] === "POST")
{
  if (empty($_POST["fname"]) || empty($_POST["sname"]))
  {

    $name_err = "名前が入力されていません。";
    }
  else
  {
      $sname = $_POST["sname"];
      $fname = $_POST["fname"];
      $name_err = "";
  }
 /* if (empty($_POST["seibetu"]))
  {

    $seibetu_err = "性別が選ばれていません。";
    }
  else
  {
      $seibetu = $_POST["seibetu"];
  }*/
  if (empty($_POST["bangou_1"]) || empty($_POST["bangou_2"]) || empty($_POST["bangou_3"]))
    {

    $bangou_err = "電話番同が入力されていません。";
    }
    else
    {
        $banogu1 = $_POST["bangou_1"];
        $bangou2 = $_POST["bangou_2"];
        $bangou3 = $_POST["bangou_3"];
        $bangou_err = "";

    }
    if (empty($_POST["mailaddress"]) || empty($_POST["domain"]))
    {

      $mail_err = "メールアドレスが入力されていません。";
    }
    else
    {
        $mailaddress = $_POST["mailaddress"];
        $domain = $_POST["domain"];
        $mail_err = "";

    }
    if($name_err == "" && $bangou_err == "" && $mail_err == "")
    {
        $sousin = "true";
    }

}
?>
<!DOCTYPE html>
<html lang = "jp">
<head>
  <meta charset = "UTF-8">
  <title>お問い合わせ</title>
  <meta name = "robots" content = "noindex, nofollow" />
  <link rel = "kadai.css">
</head>
<body>
<link rel = "styledheet" href = "kadai.css">
<h1>お問い合わせ</h1>
<h2></h2>

  <?php if ($sousin != "true") : ?>
    <form action = "" method = "post">
      <p>姓： <input type = "text" name = "sname" value = "<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8"); ?>" required></p>
      <p>名： <input type = "text" name = "fname" value = "<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8"); ?>" required></p>
      <p style="color:red;"><?php echo $name_err; ?></p>


      <p>
          性別

          男<input type = "radio" name = "seibetu" value = "男" required>
          女<input type = "radio" name = "seibetu" value = "女"required>
          不明<input type = "radio" name = "seibetu" value = "不明"required>

      </p>

      <p>
          住所  <input type = "text" name = "address" size = "50">
      <p>

      <p>
          電話番号    <input type = "text" name = "bangou_1" min = "0" size = "5" pattern="^[0-9]+$" value = "<?php echo htmlspecialchars($bangou1, ENT_QUOTES, "UTF-8");?>"required> -
                  <input type = "text" name = "bangou_2" min = "0"  size = "5" pattern="^[0-9]+$"value = "<?php echo htmlspecialchars($bangou2, ENT_QUOTES, "UTF-8");?>"required> -
                  <input type = "text" name = "bangou_3" min = "0"  size = "5" pattern="^[0-9]+$"value = "<?php echo htmlspecialchars($bangou3, ENT_QUOTES, "UTF-8");?>"required>
                  <p style = "color:red;"><?php echo $bangou_err; ?></p>
      </p>

      <p>
          メールアドレス <input type = "text" name = "mailaddress" value = "<?php echo htmlspecialchars($mailaddress, ENT_QUOTES, "UTF-8");?>"required>
                          @  <input type = "text" name = "domain"value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>"required>
                          <p style = "color:red;"><?php echo $mail_err; ?></p>
      </p>

      <p>
          どこで知ったか

                            雑誌<input type = "checkbox"  name = "ans[]" value = zasshi>
                            新聞<input type = "checkbox"  name = "ans[]" value = shinbunshi>
      </p>

      <p>
          質問カテゴリ      <select name = "cate">
          <option value = "shitumon_1">人間について</option>
          <option value = "shitumon_2">人生について</option>
          <option value = "shitumon_3">明日の夕飯について</option>
          <option value = "shitumon_4">「ああああ」について</option>
      </select>
      </p>

      <p>
          質問内容<br><textarea name = "naiyou" cols = "30" rows = "5" value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>"required></textarea>
      </p>

      <p>
          <input type = "submit" value = "送信">
          <input type = "reset" value = "リセット">
      </p>


    </form>
<?php else : ?>
    <h2>内容確認</h2>


    <p>姓<?php echo htmlspecialchars($_POST["sname"], ENT_QUOTES, "UTF-8"); ?></p>
    <p>名<?php echo htmlspecialchars($_POST["fname"], ENT_QUOTES, "UTF-8"); ?></p>
    <p>性別<?php echo htmlspecialchars($_POST["seibetu"], ENT_QUOTES, "UTF-8"); ?></p>
    <p>住所<?php echo htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8"); ?></p>
    <p> 電話番号<?php echo htmlspecialchars($_POST["bangou_1"], ENT_QUOTES, "UTF-8"); ?> -
        <?php echo htmlspecialchars($_POST["bangou_2"], ENT_QUOTES, "UTF-8"); ?> -
        <?php echo htmlspecialchars($_POST["bangou_3"], ENT_QUOTES, "UTF-8"); ?>
    </p>
    <p>メールアドレス<?php echo htmlspecialchars($_POST["mailaddress"], ENT_QUOTES, "UTF-8"); ?>
     @ <?php echo htmlspecialchars($_POST["domain"], ENT_QUOTES, "UTF-8"); ?>
    </p>
    <p>どこで知ったか
        <?php
        $ans = $_POST["ans"];
        if($ans != "nodata")
        {
        $ans_all = implode("、", $ans);
        echo htmlspecialchars("{$ans_all}", ENT_QUOTES, "UTF-8");
        }
        else
        {
            echo "選択していません。";
        }
        ?>
    </p>
    <p>質問カテゴリ<?php echo htmlspecialchars($_POST["cate"], ENT_QUOTES, "UTF-8"); ?></p>
    <p>質問内容<?php echo htmlspecialchars($_POST["naiyou"], ENT_QUOTES, "UTF-8"); ?></p>



    <p><a href = "">最初から書き直します</a></p>
  <?php endif; ?>
</body>
</html>
