<?php
    session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>
    <?php

    //count_data.datというファイルを読み込みめるようにします。
     $fp = fopen("count_data.txt","r");

     //$countにデーターを読み込み、プラス１とする。
     $count = fgets($fp);
     $count = $count + 1;
     //ファイルを閉じます。
     fclose($fp);
    
     //ファイルを書き込み用にオープンします。
     $fp = fopen("count_data.txt","w");

     //プラスした値をもう一度ファイルにか聞き込む
      fwrite($fp,$count);

     //ファイルを閉じます。
     fclose($fp);

     echo "あなたは".$count."人目のお客様です。";

     ?>
<?php
date_default_timezone_set('Asia/Tokyo');
$ymdt=time();//現在のUNIXタイムスタンプ、GMTとの時差9時間を足しておく
$week=array('日','月','火','水','木','金','土');

    if (!isset($_SESSION["count"])){
        print('初回の訪問です。セッションを開始します。');

        $_SESSION["count"] = 0;
        $_SESSION["date"] = date('Y m/d(',$ymdt). $week[date('w',$ymdt)].date(') H:i',$ymdt);
    }else{
        $count = $_SESSION["count"];
        $count++;

        print($count . ",");
        $_SESSION["count"] = $count;

        if (isset($_SESSION["date"])){
            print($_SESSION["date"]);
        }

        $_SESSION["date"] = date('Y m/d(',$ymdt). $week[date('w',$ymdt)].date(') H:i',$ymdt);

    }

?>

</body>
</html>
