<html>
<body>
<?php
$id = $_REQUEST["id"];
$lines[0]=$id;
urldecode('$id');
echo $id;
if( $handle = fopen( 'file.csv', 'r' ) ){
$names = Array(); //該当者の名前を保存する配列
while( ( $lines = fgetcsv( $handle ) ) !== FALSE ){
if( $lines[1] == $id ){

$title[] = $lines[0];
$keywords[] = $lines[2];
$url[] = $lines[1]; //URL
}
}
echo '・<a href="';
echo implode($url);
echo '">';
echo implode($title);
echo '</a><br />';
}
?>
</body>
</html>
