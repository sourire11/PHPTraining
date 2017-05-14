
<html>
<head><title>PHP TEST</title></head>
<body>
<?php
session_start();
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
