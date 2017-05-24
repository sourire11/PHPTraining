
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">

<h2>管理画面</h2>
<body>
    <link rel="stylesheet" type="text/css" href="sample2.css">
    <table>
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
        echo "<table>\n";
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

</head>

</dody>
</html>
