<?php
 $s = 0; // sが合計値
 $i = 0; // 足し算
 do{
    ++$i;
    $s += $i;　// sに代入する　$s = $s + $i;
}while($i < 10); // 10より小さいか判定
print"１から $i までの和は $s";
?>