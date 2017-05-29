<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title> MySQLへの接続・切断</title>
</head>
<body>

    <?php
     $database = 'test_01';
     $con = mysql_connect('localhost', 'root', 'root') or die('接続に失敗しました');
     echo 'MySQLへの接続に成功しました<br>';
     echo 'リンクIDは' . $con . 'です<br>';
     mysql_select_db($database, $con) or die($database . 'に接続できません');
     echo 'データベース' . $database . 'に接続しました<br>';
     mysql_query('SET NAMES UTF8');

     mysql_query('INSERT INTO lang(number, Lang, score) VALUES (120101010, "英", 90)')
     or die('データベースを挿入できませんでした');
     echo 'データを挿入しました<br>';

     if (mysql_close($con))
     {
         echo 'MySQLとの接続を切断しました<br>';
     }else
     {
         echo 'MySQLとの切断に失敗しました';
     }
     ?>

     <body>
         </html>
