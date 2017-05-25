<HTML>
<BODY>

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


 $fp = fopen("donut.csv", "r");
 while ($data = fgetcsv($fp, 10000)) {
   foreach ($data as $d) {
     print $d . "<br>\n";
   }
 }

 ?>

  </BODY>
 </HTML>
