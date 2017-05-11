<!DOCTYPE html>
 <html lang = “ja”>
<head>
    <title>関数</title>
<h2>課題１</h2>
<?php
function writeMsg() {
    echo "2017年度の新入社員研修がスタートしました。頑張りましょう。";
}
writeMsg();
 ?>


 <h2>課題２</h2>
 <?php
   function addfive($num){
       $num += 5;
   }
   function addsix(&$num){
       $num += 6;
   }
   $orignum = 10;
   addfive($orignum);
   echo "元の値は$orignum<br/>";
   addsix($orignum);
   echo "元の値は$orignum<br/>";
   ?>
 </body>
 </html>
