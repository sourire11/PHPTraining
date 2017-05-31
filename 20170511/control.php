
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="text3.css" />
<div id="snow">

<h2>管理画面</h2>


<h3>お問い合わせ一覧</h3>
<body bgcolor="#ffb2d8">

    <table class="tbl_05">
    　<tr>
        <th id="date">日付</th>
    　　<th id="no">No.</th>
    　　<th id="name">氏名</th>
    <th id="sex">性別</th>
    <th id="zip">郵便番号</th>
    <th id="add">住所</th>
    <th id="tel">電話番号</th>
    <th id="mail">メールアドレス</th>
    <th id="why">どこで知ったか</th>
    <th id="cate">質問カテゴリ</th>
    <th id="qa">質問内容</th></tr>

<?php

    $file = "file.csv";

    if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
        while ( ( $data = fgetcsv ( $handle, 1000, ",") ) !== FALSE ) {
            echo "\t<tr>\n";
            for ( $i = 0; $i < count( $data ); $i++ ) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
        fclose ( $handle );

    }
    ?>


<p class="text"><a href="http://localhost/PHPTraining/20170511/form.php">問い合わせ画面へ</a></p>
</div>
</head>

</dody>
</html>
