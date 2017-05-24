<?php
// セッションの開始
session_start();
mb_internal_encoding('UTF-8');
header("Content-type: text/html; charset=UTF-8");

$shi = htmlspecialchars($_POST["shi"], ENT_QUOTES, "UTF-8");
$mei = htmlspecialchars($_POST["mei"], ENT_QUOTES, "UTF-8");
$sex = htmlspecialchars($_POST["sex"], ENT_QUOTES, "UTF-8");
$add = htmlspecialchars($_POST["add"], ENT_QUOTES, "UTF-8");
$txt0 = htmlspecialchars($_POST["txt0"], ENT_QUOTES, "UTF-8");
$txt1 = htmlspecialchars($_POST["txt1"], ENT_QUOTES, "UTF-8");
$txt2 = htmlspecialchars($_POST["txt2"], ENT_QUOTES, "UTF-8");
$mail1 = htmlspecialchars($_POST["mail1"], ENT_QUOTES, "UTF-8");
$mail2 = htmlspecialchars($_POST["mail2"], ENT_QUOTES, "UTF-8");
$why1 = htmlspecialchars($_POST["why1"], ENT_QUOTES, "UTF-8");
$why2 = htmlspecialchars($_POST["why2"], ENT_QUOTES, "UTF-8");
$example2 = htmlspecialchars($_POST["example2"], ENT_QUOTES, "UTF-8");
$exmple = htmlspecialchars($_POST["exmple"], ENT_QUOTES, "UTF-8");


$line = array($shi.$mei, $sex, $add, $txt0. "-" .$txt1. "-" .$txt2, $mail1. "@" .$mail2, $why1. "," .$why2, $example2, $exmple);

$file_name = "file.csv" ;
$fp = fopen($file_name, "a+");
$result = fputcsv($fp, $line);
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" type="text/css" href="sample.css">
    <meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<title>確認画面</title>
</head>
<body>
    <div class="parent">
  <div class="inner">
      <div class="txt">
    <div class="tablecell">
    <div class="main">
<h2>確認画面</h2>
        <div class="sample-box-12">


    姓　　　　　　　　<?php echo $shi; ?>　<p>
    名　　　　　　　　<?php echo $mei; ?>　<p>
    性別　　　　　　　<?php echo $sex; ?>  <p>
    住所　　　　　　　<?php echo $add; ?>　<p>
    電話番号　　　　　<?php echo $txt0. "-" .$txt1. "-" .$txt2; ?>　<p>
    メールアドレス　　<?php echo $mail1. "@" .$mail2; ?>　<p>
    どこで知ったか　　<?php echo $why1. " , " .$why2; ?>　<p>
    血液型　　　　　　<?php echo $example2; ?>　<p>
    質問内容　　　　　<?php echo $exmple; ?>　<p>
    <form method="POST" action="fini.php">
            <input type="button" value="戻る" onclick="history.back(-1)">
        <button type="submit" name="submit">送信</button>
    </form>
</div>
</body>
</html>
