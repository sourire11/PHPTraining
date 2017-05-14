<?php
date_default_timezone_set('Asia/Tokyo');
$ymdt=time();//現在のUNIXタイムスタンプ、GMTとの時差9時間を足しておく
$week=array('日','月','火','水','木','金','土');
$ymd=date('Y m/d(',$ymdt). $week[date('w',$ymdt)].date(') H:i',$ymdt);
print $ymd;
?>
