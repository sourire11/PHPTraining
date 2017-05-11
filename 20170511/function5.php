<html>
<head>
<h2>サンプル3</h2>
    <?php
     function familyName($fname,$year) {
         echo "$fname yamada.が生まれた年は$year<br>";
     }
     familyName("yuuki","1975");
     familyName("hirobumi","1978");
     familyName("yukiko","1983");
     ?>

<h2>サンプル4</h2>
    <?php
function setHeight($minheight = 50){
  echo "高さは:$minheight<br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

<h2>サンプル5</h2>
    <?php
     function sum($x,$y){
         $z=$x+$y;
         return$z; // 戻り値を設定する
     }
     echo "5+10=".sum(5,10)."<br>";
     echo "7+13=".sum(7,13)."<br>";
     echo "2+4=".sum(2,4)."<br>";
     ?>
</body>
</html>
