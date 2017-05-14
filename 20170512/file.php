<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML5サンプル</title>
</head>
<body>
<p>HTML5で作成しました！</p>
<h2>ブラウザ表示</h2>
<?php
// ブラウザ情報を取得して変数化
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// 取得したブラウザ情報を表示
echo "--あなたがお使いのブラウザ--<br />\n";
echo $user_agent;
?>
<h2>os</h2>
<?php
echo PHP_OS;
?>
<h2>現在時刻の表示</h2>
    <?php
    date_default_timezone_set('Asia/Tokyo');
 echo date("Y/m/d/ G:i:s");
 ?>
 <hr />
 <?php
 date_default_timezone_set('UTC');
 echo "UTC（協定世界時）：" . date("Y/m/d H:i:s");
 ?>
 <h2>普通文字</h2>
 <?php
  // 文字列のアルファベットのところはすべてフォーマット文字列です
print "今日は".date("Y年n月j日")." 時刻は".date("G時i分s秒")."です。";
  ?>
  <h2>エスケープ処理</h2>
 <?php
  echo date("\I\t'\s ").", today";
  /* I,t,sともにフォーマット文字列として定義されていますのでエスケープ処理します。tは普通に\tとすると「タブ」の意味になってしまうので２重にエスケープしています。*/
   ?>
   <h2>タイムスタンプ</h2>
   <?php
$mod = getlastmod(); // $modに最終更新日のタイムスタンプを代入

echo "最終更新日のタイムスタンプ--" . $mod . "<br />\n";

// このままではさっぱり分からないのでdate関数で書式化すると・・・
echo "最終更新日--" . date("Y/m/d H:s",$mod);
?>
<h2>うるう年</h2>
<?php
 $year = date("Y"); // 今年の西暦が4桁で代入されます
 if ( $year%4 == 0 && $year%100 != 0 || $year%400 == 0 ) {
     echo "今年はうるう年です";
}else{
    echo "今年はうるう年ではありません";
}
?>
<h2>曜日の日本語表示</h2>
<?php
$weekday = array("日","月","火","水","木","金","土");
print $weekday[date("w")]."曜日";
 ?>
 <h2>カレンダー</h2>
 <?php
 $now_year = date("Y"); //現在の年を取得
 $now_month = date("n"); //現在の月を取得
 $now_day = date("j"); //現在の日を取得
 $countdate = date("t"); //今月の日数を取得
 $weekday = array("日","月","火","水","木","金","土"); //曜日の配列作成

 //見出し部分出力
 echo "<div>".$now_year.'年'.$now_month."月のカレンダー</div>\n";

 //一覧表示
 for( $day=1; $day <= $countdate; $day++ ){ //今月の日数分ループする

     //各日付の曜日を数値で取得
     //曜日用の配列$weekdayを使い、$weekday[$w]で日本語の曜日が取得できる
     $w = date("w", mktime( 0, 0, 0, $now_month, $day, $now_year ) );

 //スタイルシートの値設定ここから-----------------------------------

 switch( $w ){
     case 0: //日曜日の文字色
         $style = "color:#C30;";
         break;
     case 6: //土曜日の文字色
         $style = "color:#03C;";
         break;
     default: //月～金曜日の文字色
         $style = "color:#333;";
 }

 if( $day == $now_day ){
     $style = $style." background:silver"; //今日の背景色
 }
 //スタイルシートの値設定ここまで-----------------------------------

 $line = $day."日（".$weekday[$w]."）"; //１行の定義：日付（曜日）

 //スタイルシートを挿入・1行ごとに改行して出力
 echo '<div style="'.$style.'">'.$line."</div>\n";
 }
 ?>

<br/>
<?php
date_default_timezone_set('Asia/Tokyo');
$ymdt=time();//現在のUNIXタイムスタンプ、GMTとの時差9時間を足しておく
$week=array('日','月','火','水','木','金','土');
$ymd=date('Y m/d(',$ymdt). $week[date('w',$ymdt)].date(') H:i',$ymdt);
print $ymd;
?>

<h2>PHP TEST</h2>
<?php
    session_start();
?>
<?php
date_default_timezone_set('Asia/Tokyo');
$ymdt=time();//現在のUNIXタイムスタンプ、GMTとの時差9時間を足しておく
$week=array('日','月','火','水','木','金','土');

    if (!isset($_SESSION["count"])){
        print('初回の訪問です。セッションを開始します。');

        $_SESSION["count"] = 1;
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
<h2>カレンダー</h2>
<?php
$now_year = date("Y"); // 現在の年を取得
$now_month = date("n"); // 在の月を取得
$now_day = date("j"); // 現在の日を取得
// 曜日の配列作成
$weekday = array( "日", "月", "火", "水", "木", "金", "土" );
// 1日の曜日を数値で取得
$fir_weekday = date( "w", mktime( 0, 0, 0, $now_month, 1, $now_year ) );

echo '<table border="1" cellspacing="0" cellpadding="0" style="text-align:center;">';
// 見出し部分<caption>タグ出力
echo "<caption style=\"color:black; font-size:14px; padding:0px;\">"
 .$now_year."年".$now_month."月のカレンダー
 </caption>\n";

echo "<tr>\n";

// 曜日セル<th>タグ設定
$i = 0; // カウント値リセット
while( $i <= 6 ){ // 曜日分ループ

//-------------スタイルシート設定---------------------------------
    if( $i == 0 ){ // 日曜日の文字色
        $style = "#C30";
    }
    else if( $i == 6 ){ // 土曜日の文字色
        $style = "#03C";
    }
    else{ // 月曜～金曜日の文字色
        $style = "black";
    }
//-------------スタイルシート設定終わり---------------------------

    // <th>タグにスタイルシートを挿入して出力
    echo "\t<th style=\"color:".$style."\">".$weekday[$i]."</th>\n";
    $i ++; //カウント値+1
}

// 行の変更
echo "</tr>\n";
echo "<tr>\n";

$i = 0; //カウント値リセット（曜日カウンター）
while( $i != $fir_weekday ){ //１日の曜日まで空白（&nbsp;）で埋める
    echo "\t<td>&nbsp;</td>\n";
    $i ++;
}

// 今月の日付が存在している間ループする
for( $day=1; checkdate( $now_month, $day, $now_year ); $day++ ){

    //曜日の最後まできたらカウント値（曜日カウンター）を戻して行を変える
    if( $i > 6 ){
        $i = 0;
        echo "</tr>\n";
        echo "<tr>\n";
    }

//-------------スタイルシート設定-----------------------------------
    if( $i == 0 ){ //日曜日の文字色
        $style = "#C30";
    }
    else if( $i == 6 ){ //土曜日の文字色
        $style = "#03C";
    }
    else{ //月曜～金曜日の文字色
        $style = "black";
    }

    // 今日の日付の場合、背景色追加
    if( $day == $now_day ){
        $style = $style."; background:silver";
    }
//-------------スタイルシート設定終わり-----------------------------

    // 日付セル作成とスタイルシートの挿入
    echo "\t<td style=\"color:".$style.";\">".$day."</td>\n";

    $i++; //カウント値（曜日カウンター）+1
}

while( $i < 7 ){ //残りの曜日分空白（&nbsp;）で埋める
    echo "\t<td>&nbsp;</td>\n";
    $i++;
}
echo "</tr>\n";
echo "</table>\n";
?>
<h2>カウンター</h2>
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
 $ymd=date('Y m/d(',$ymdt). $week[date('w',$ymdt)].date(') H:i',$ymdt);
 print $ymd;
 ?>
 <h2>printf</h2>
 <?php
//フォーマット部分（ここでは%d）が２つ目の引数と交換されて出力されます。
$score = 95;
printf( "得点は%d点です", $score );
?>
 <h2>値が複数ある場合の処理</h2>
 <?php
 $year = 2004;
 $month = 5;
 $day = 4;

 // 「2004年05月04日」と出力したい
 printf("今日は%04d年%02d月%02d日です。",$year, $month, $day );
  ?>

</body>
</html>
