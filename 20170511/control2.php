
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h2>テーブル表示するcsvファイルを指定して下さい。</h2>
<form enctype="multipart/form-data" action="fini.php" method="POST" />
<input type="file" name="csvfile" accept="application/excel" />
<input type="submit" value="送信" />
</form>
<br />
<?php
if(isset($_FILES["csvfile"])){
if($fp = fopen($_FILES["csvfile"]["tmp_name"],r)){
echo '<table border = "1">';
while(($row = fgetcsv($fp)) != false){
echo "<tr>";
for($i = 0; $i < count($row); $i++){
echo "<td>" . mb_convert_encoding($row[$i],"UTF8","SJIS-win") . "</td>" ;
}
echo"</tr>";
}
echo "</table>";
}
}
?>
</body>
</html>
