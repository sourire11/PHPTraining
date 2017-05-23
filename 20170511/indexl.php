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
$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8");
$why = htmlspecialchars($_POST["why"], ENT_QUOTES, "UTF-8");
$qa = htmlspecialchars($_POST["qa"], ENT_QUOTES, "UTF-8");
$exmple = htmlspecialchars($_POST["exmple"], ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" type="text/css" href="sample.css">
    <meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="form.css">
</head>
<body>

    <div class="parent">
  <div class="inner">
      <div class="txt">
    <div class="tablecell">
    <div class="main">
<h1>確認画面</h1>
        <div class="sample-box-12">


    姓　　　　　　<?php echo $shi; ?>　<p>
    <tr><td>名　　　　　　　<td>　<?php echo $mei; ?>　</tr><p>
    <tr><td>性別　　　　　　<td>　<?php echo $sex; ?>  </tr><p>
    <tr><td>住所　　　　　　<td>　<?php echo $add; ?>　</tr><p>
    <tr><td>電話番号　　　　<td>　<?php echo $txt0; ?>　</tr><p>
    <tr><td>メールアドレス　<td>　<?php echo $mail; ?>　</tr><p>
    <tr><td>どこで知ったか　<td>　<?php echo $why; ?>　</tr><p>
    <tr><td>質問カテゴリ　　<td>　<?php echo $qa; ?>　</tr><p>
    <tr><td>質問内容　　　　<td>　<?php echo $exmple; ?>　</tr><p>
    <form method="POST" action="indexl.php">
            <input type="button" value="戻る" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>
