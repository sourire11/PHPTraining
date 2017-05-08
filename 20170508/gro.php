<?php
 $x =5; //グローバルスコープ
 function mytest(){
      global $x;

      echo $x; //ローカルスコープ変数の参照
}

mytest();
?>
