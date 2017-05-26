
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="sample.css">
<title>フォームからデータを受け取る</title>
<div class="parent">
<div class="inner">
  <div class="txt">
<div class="tablecell">
<div class="main">
<div class="box15">
<h2>完了画面</h2>
<div class="sample-box-12">

<?php
function set_count( $file_name = "counter.txt"){
	if( file_exists($file_name) ){

		// ファイルを読み込む
		// カウンターの数字を増やす
		$count = (int)file_get_contents($file_name);

		// ファイルに書き込む
		file_put_contents($file_name, $count+1);

	}else{
		// ファイルが存在しなかった場合の処理
		// ファイルを作成する
		$handle = fopen($file_name , 'w+');
		$count = 1;

		fwrite($handle, $count);
		fclose($handle);
	}

	// ここを追加
	return $count;
}
?>
<p>お問い合わせ番号: <?php echo set_count(); ?></p>
<div id="table_disp"></div>
<link rel="stylesheet" type="text/css" href="text3.css">
<p class="text"><a href="http://localhost/PHPTraining/20170511/control.php">管理画面へ</a></p>
</head>
<body>
</dody>
</html>
