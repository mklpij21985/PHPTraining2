<?php
$sname = "";
$fname = "";
$seibetu = "";
$bangou1 = "";
$bangou2 = "";
$bangou3 = "";
$mailaddress = "";
$domain = "";
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
<h1>お問い合わせ</h1>
<p class = "okyaku">お客様情報を入力してください。<p>
<table>

    <form action = "end_page.php" method = "post">
    <div class = "name">
      <p>姓:<input type = "text" name = "sname"maxlength = "7" value = "<?php echo htmlspecialchars($sname, ENT_QUOTES, "UTF-8"); ?>" placeholder = "（例）田中" required></p>
      <p>名:<input type = "text" name = "fname" maxlength = "7" value = "<?php echo htmlspecialchars($fname, ENT_QUOTES, "UTF-8"); ?>" placeholder = "（例）太郎" required></p>
    </div>


    <div  class = "seibetu">
      <p class = "seibetuaa">
          性別:

          <label><input type = "radio" name = "seibetu" value = "男" required>男</label>
          <label><input type = "radio" name = "seibetu" value = "女"required>女</label>
          <label><input type = "radio" name = "seibetu" value = "不明"required>不明</label>
      </p>
    </div>
    <div class = "address">
      <p>
          住所:<input type = "text" name = "address" size = "50" maxlength = "50" placeholder = "（例）○○県○○市○○町"　required>
      <p>
    </div>
    <div class = "denwa">
      <p>
          電話番号:    <input type = "text" name = "bangou_1" min = "0" size = "5" pattern="^[0-9]+$" maxlength = "4" placeholder = "0000" value = "<?php echo htmlspecialchars($bangou1, ENT_QUOTES, "UTF-8");?>"required> -
                  <input type = "text" name = "bangou_2" min = "0"  size = "5" pattern="^[0-9]+$" maxlength = "4" placeholder = "1234" value = "<?php echo htmlspecialchars($bangou2, ENT_QUOTES, "UTF-8");?>"required> -
                  <input type = "text" name = "bangou_3" min = "0"  size = "5" pattern="^[0-9]+$" maxlength = "4" placeholder = "5678"value = "<?php echo htmlspecialchars($bangou3, ENT_QUOTES, "UTF-8");?>"required>
              </div>

      </p>
    <div class = "mail">
      <p>
          メールアドレス: <input type = "text" name = "mailaddress" pattern = "^[a-z0-9._%+-]+$" placeholder = "tanakatanaka" value = "<?php echo htmlspecialchars($mailaddress, ENT_QUOTES, "UTF-8");?>"required>
                          @  <input type = "text" name = "domain" pattern = "[a-z0-9.-]+\.[a-z]{2,3}$" placeholder = "tanaka.co.jp" value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>"required>
        </div>

      </p>


    <div>
      <p>
          どこで知ったか</p><p>
          <label><input type = "checkbox"  name = "ans[]" value = "雑誌">雑誌</label>
          <label><input type = "checkbox"  name = "ans[]" value = "新聞">新聞</label>
            <label><input type = "checkbox"  name = "ans[]" value = "聖書">聖書<label>
            <label><input type = "checkbox"  name = "ans[]" value = "古事記">古事記</label>
            <label><input type = "checkbox"  name = "ans[]" value = "予知">予知</label>
            <label><input type = "checkbox"  name = "ans[]" value = "勘">勘</label>
            <label><input type = "checkbox"  name = "ans[]" value = "神のお告げ">神のお告げ</label>
      </p>
    </div>

    <div>
      <p>
          質問カテゴリ:      <select name = "cate" required>
        <option value = "ワームホールの作り方">ワームホールの作り方</option>
          <option value = "人間について">人間について</option>
          <option value = "人生について">人生について</option>
          <option value = "明日の夕飯について">明日の夕飯について</option>
          <option value = "「ああああ」について">「ああああ」について</option>
          <option value = "タイムスリップした件">タイムスリップした件</option>
          <option value = "塩について">塩について</option>
          <option value = "この世のすべてについて">この世のすべてについて</option>
      </select>
      </p>
    </div>
    <div>
      <p>
          質問内容<br><textarea name = "naiyou"　placeholder = "ねんどでちょちょいと作れますか？" cols = "75" rows = "10" value = "<?php echo htmlspecialchars($domain, ENT_QUOTES, "UTF-8");?>"
              maxlength = "500" 　required></textarea>
      </p>
    </div>
    <div class = "button">
      <p><input class = "sbutton" type = "submit" value = "送信"></p>
      <p><input class = "rbutton" type = "reset" value = "リセット"></p>
    </div>

    </form>
</table>

</body>
</html>
</div>
