<?php
// セッションの開始
session_start();
mb_internal_encoding('UTF-8');
header("Content-type: text/html; charset=UTF-8");

$date = date('Y/m/d');
$contents = @file_get_contents('counter.txt');
$shi = htmlspecialchars($_POST["shi"], ENT_QUOTES, "UTF-8");
$mei = htmlspecialchars($_POST["mei"], ENT_QUOTES, "UTF-8");
$sex = htmlspecialchars($_POST["sex"], ENT_QUOTES, "UTF-8");
$zip = htmlspecialchars($_POST["zip"], ENT_QUOTES, "UTF-8");
$address = htmlspecialchars($_POST["address"], ENT_QUOTES, "UTF-8");
$txt0 = htmlspecialchars($_POST["txt0"], ENT_QUOTES, "UTF-8");
$txt1 = htmlspecialchars($_POST["txt1"], ENT_QUOTES, "UTF-8");
$txt2 = htmlspecialchars($_POST["txt2"], ENT_QUOTES, "UTF-8");
$mail1 = htmlspecialchars($_POST["mail1"], ENT_QUOTES, "UTF-8");
$mail2 = htmlspecialchars($_POST["mail2"], ENT_QUOTES, "UTF-8");
$why1 = htmlspecialchars($_POST["why1"], ENT_QUOTES, "UTF-8");
$why2 = htmlspecialchars($_POST["why2"], ENT_QUOTES, "UTF-8");
$category = htmlspecialchars($_POST["category"], ENT_QUOTES, "UTF-8");
$exmple = htmlspecialchars($_POST["exmple"], ENT_QUOTES, "UTF-8");


$line = array($date, $contents, $shi." ".$mei, $sex, $zip, $address, $txt0. "-" .$txt1. "-" .$txt2, $mail1. "@" .$mail2, $why1.$why2, $category, $exmple);


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



    <div class="main">
    <div class="parent">
  <div class="inner">
      <div class="txt">
    <div class="tablecell">

        <div class="box15">
<h2>お問い合わせ内容をご確認ください</h2>
<p>
以下の内容で宜しければ<span style="color:red">[送信]</span>ボタンを押してください。<br>
<div class="sample-box-12">
    <ul>
<li>姓　　　　　　　<?php echo $shi; ?> </li>
<li>名　　　　　　　<?php echo $mei; ?>　</li>
<li>性別　　　　　　<?php echo $sex; ?>  </li>
<li>郵便番号　　　　<?php echo $zip; ?> </li>
<li>住所　　　　　　<?php echo $address; ?>　</li>
<li>電話番号　　　　<?php echo $txt0. "-" .$txt1. "-" .$txt2; ?>　</li>
<li>メールアドレス　<?php echo $mail1. "@" .$mail2; ?>　</li>
<li>どこで知ったか　<?php echo $why1. $why2; ?>　</li>
<li>質問カテゴリ　　<?php echo $category; ?>　</li>
<li>質問内容　　　　<?php echo $exmple; ?>　</li>
</ul>
    <form method="POST" action="fini.php">

    <style type="text/css">
    .center {
      text-align: center;
    }
    .center * {
      margin: 0 auto;
      width: 150px;
      border-radius: 25px;
    }
    </style>

    <div class="center">
<div style="text-align:center;">
            <input type="button" value="戻る" onclick="history.back(-1)" class="square_btn">
        <button type="submit" name="submit" class="square_btn">送信</button>
    </form>
</div></div>
</body>
</html>
