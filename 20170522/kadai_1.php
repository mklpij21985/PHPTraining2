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
    }
    if (empty($_POST["mailaddress"]) || empty($_POST["domain"]))
    {

      $mail_err = "メールアドレスが入力されていません。";
    }
    else
    {
        $mailaddress = $_POST["mailaddress"];
        $domain = $_POST["domain"];
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
</head>
<body>
<h1>お問い合わせ</h1>

  <?php if ($sousin != "true") : ?>
    <form action = "" method = "post">
      <p>姓： <input type = "text" name = "sname" value = "<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8"); ?>"></p>
      <p>名： <input type = "text" name = "fname" value = "<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8"); ?>"></p>
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

<p><input type = "submit" value = "送信">
<input type = "reset" value = "リセット"></p>
    </form>
<?php else : ?>
    <p>
       <form action = "end_page.php" method = "post">
    </p>
    <p><a href="">未入力状態で書き直します</a></p>
  <?php endif; ?>
</body>
</html>
