
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
        <h1>管理画面</h1>
            <table border = "1">
                <tr>
                    <td>注文番号</td>
                    <td>姓</td>
                    <td>名</td>
                    <td>性別</td>
                    <td>住所</td>
                    <td>電話番号</td>
                    <td>メールアドレス</td>
                    <td>どこで知ったか</td>
                    <td>質問カテゴリ</td>
                    <td>質問内容</td>

                </tr>
                <?php
                $file_name = "kadai.csv";
                $fp = fopen($file_name, 'r');
                while($kanrinaiyou = fgetcsv($fp , 1000))
                {
                    print "<tr>";

                    for ($i = 0; $i < count($kanrinaiyou); $i++)
                    {
                        mb_convert_variables("UTF-8", "SJIS-win", $kanrinaiyou[$i]);
                        print "<td>{$kanrinaiyou[$i]}\n</td>";
                    }
                    print "</tr>";
                }
                fclose($fp);
                ?>
            </table>
    </body>
</html>
