
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="text3.css" />
<h2>管理画面</h2>

<h3>お問い合わせ一覧</h3>
<body>
    <table class ="tbl_05">
    　<tr>
    　　<th>No.</th>
    　　<th>氏名</th>
    <th>性別</th>
    <th>住所</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
    <th>どこで知ったか</th>
    <th>血液型</th>
    <th>質問内容</th></tr>
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
<ul class="links1">
    <li><a href="http://localhost/PHPTraining/20170511/form.php">問い合わせ画面へ</a></li>
</ul>
</div>
</head>

</dody>
</html>
