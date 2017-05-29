<?php

session_cache_limiter('private_no_expire');
session_start();
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
<div class = "all">
<html lang = "jp">
<head>
  <meta charset = "UTF-8">
  <title>お問い合わせ</title>
  <meta name = "robots" content = "noindex, nofollow" />

</head>
<body>
<link rel = "stylesheet" href = "kadai.css">

<div class = "toi">
<h1>お問い合わせ</h1>
<p class = "okyaku">お客様情報を入力してください。<p>
<p class = "juyou">※すべての項目が入力必須です。</p>
</div>
<table>

  <?php if ($sousin != "true") : ?>
    <form action = "end_page.php" method = "post">
    <div class = "name">
      <p>姓<input type = "text" name = "sname" value = "<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8"); ?>" required></p>
      <p>名<input type = "text" name = "fname" value = "<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8"); ?>" required></p>
    </div>

      <p style="color:red;"><?php echo $name_err; ?></p>
    <div  class = "seibetu">
      <p class = "seibetuaa">
          性別   </p>
<p class = "seibetusentaku">
          男<input type = "radio" name = "seibetu" value = "男" required>
          女<input type = "radio" name = "seibetu" value = "女"required>
          不明<input type = "radio" name = "seibetu" value = "不明"required>
      </p>
    </div>
    <div class = "address">
      <p>
          住所  <input type = "text" name = "address" size = "50" required>
      <p>
    </div>
    <div class = "denwa">
      <p>
          電話番号    <input type = "text" name = "bangou_1" min = "0" size = "5" pattern="^[0-9]+$" value = "<?php echo htmlspecialchars($bangou1, ENT_QUOTES, "UTF-8");?>"required> -
                  <input type = "text" name = "bangou_2" min = "0"  size = "5" pattern="^[0-9]+$"value = "<?php echo htmlspecialchars($bangou2, ENT_QUOTES, "UTF-8");?>"required> -
                  <input type = "text" name = "bangou_3" min = "0"  size = "5" pattern="^[0-9]+$"value = "<?php echo htmlspecialchars($bangou3, ENT_QUOTES, "UTF-8");?>"required>
              </div>
                  <p style = "color:red;"><?php echo $bangou_err; ?></p>
      </p>
    <div class = "mail">
      <p>
          メールアドレス <input type = "text" name = "mailaddress" pattern = "^[a-z0-9._%+-]+$"value = "<?php echo htmlspecialchars($mailaddress, ENT_QUOTES, "UTF-8");?>"required>
                          @  <input type = "text" name = "domain" pattern = "[a-z0-9.-]+\.[a-z]{2,3}$"value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>"required>
        </div>
                          <p style = "color:red;"><?php echo $mail_err; ?></p>
      </p>


    <div>
      <p>
          どこで知ったか
      </p>
      <p>

                            聖書<input type = "checkbox"  name = "ans[]" value = "聖書">
                            古事記<input type = "checkbox"  name = "ans[]" value = "古事記">
                            予知<input type = "checkbox"  name = "ans[]" value = "予知">
                            勘<input type = "checkbox"  name = "ans[]" value = "勘">
                            神のお告げ<input type = "checkbox"  name = "ans[]" value = "神のお告げ">
      </p>
    </div>

    <div>
      <p>
          質問カテゴリ      <select name = "cate" required>
          <option value = "人間について">人間について</option>
          <option value = "人生について">人生について</option>
          <option value = "明日の夕飯について">明日の夕飯について</option>
          <option value = "「ああああ」について">「ああああ」について</option>
          <option value = "タイムスリップした件">タイムスリップした件</option>
          <option value = "塩について">塩について</option>
          <option value = "この世のすべてについて">この世のすべてについて</option>
          <option value = "ワームホールの作り方">ワームホールの作り方</option>
      </select>
      </p>
    </div>
    <div>
      <p>
          質問内容<br><textarea name = "naiyou" cols = "75" rows = "10" value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>"required></textarea>
      </p>
    </div>
    <div class = "button">
      <p><input class = "sbutton" type = "submit" value = "送信"></p>
      <p><input class = "rbutton" type = "reset" value = "リセット"></p>
    </div>

    </form>
</table>
  <?php endif; ?>
</body>
</html>
</div>
