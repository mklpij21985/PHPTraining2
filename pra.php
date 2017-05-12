<!DOCTYPE html0>
<html lang = "jp">
<head>
<meta charset = "UTF-8">
<title>お問い合わせ</title>
</head>
<body>
<h1>お問い合わせ</h1>

<form action = "pra.php" method = "post">
<p>姓 <input type = "text" name = "sname"></p>
<p>名 <input type = "text" name = "fname"></p>

<p>
    性別      男<input type = "radio" name = "seibetsu" value = "男">
   　　      女<input type = "radio" name = "seibetsu" value = "女">
   　　      不明<input type = "radio" name = "seibetsu"value = "不明">
</p>

<p>
    郵便番号     〒<input type = "text" name = "adnum_a" size = "3">
  -  <input type = "text" name = "adnum_b" size = "4"><br>
住所　　       <input type = "text" name = "adrs" size = "60">
</p>

<p
>電話番号    <input type = "text" name = "telnum_a" size = "4">
  -  <input type = "text" name = "telnum_b" size = "4">
  -  <input type = "text" name = "telnum_c" size = "4">
</p>
<p>
メールアドレス　<input type = "text" name = "mailadrs_a" size = "20">
  @  <input type = "text" name = "mailadrs_b" size = "20">
</p>
<p>
    どこで知ったか　　　雑誌<input type = "checkbox" name = "info_a">
    新聞                  <input type = "checkbox" name = "info_b">
</p>

<p>
質問カテゴリ
    <select name = "cate">
    <option value = "質問1">人間ですか？</option>
    <option value = "質問2">生きてますか？</option>
    <option value = "質問3">元気ですかぁ！！！？</option>
    <option value = "質問4">腹減ったよな？</option>
</p>
<p>
    質問内容<br>
    <textarea name = "naiyou" cols = "30" rows = "5">内容を入力 </textarea>
</p>
<p>
    質問内容<br>
    <textarea name = "naiyou" cols = "30" rows = "5">内容を入力 </textarea>
</p>
</form>
</body>
