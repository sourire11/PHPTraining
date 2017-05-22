<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" type="text/css" href="sample.css">
<meta charset = "UTF-8">
<title>フォームからデータを受け取る</title>
</head>
<body>
    <div class="parent">
  <div class="inner">
      <div class="txt">
    <div class="tablecell">
    <div class="main">
    <h2>お問い合わせ</h2>
    <?php
    $csv = fopen('file.csv', 'a');
    fputcsv($csv, $_POST);
    fclose($csv);
    ?>
<div class="sample-box-12">
<form action = "indexl.php" method = "post">
<form onsubmit="return false;">
姓　　　　　　　　<input type="text" name="shi" required class="example1"/></br>
<p>
名　　　　　　　　<input type="text" name="mei" required class="example1"/></br>
<p>
性別　　　　　　　<input type="radio" name="sex" id="i1"><LABEL for="i1">男</LABEL>
<input type="radio" name="q1" id="i2" required><LABEL for="i2">女</LABEL>
<input type="radio" name="q1" id="i3" required><LABEL for="i3">不明</LABEL><br/>
<p>
住所　　　　　　　<input type = “text” name ="add" required><br/>
<p>
電話番号　　　　　<input type="text" name="tel" required class="example2">-<input type = “text” name =“comment/“  required class="example2">-<input type = “text” name =“comment/“ required class="example2"><br/>
<p>
メールアドレス　　<input type = “text” name ="mail" required>＠<input type = “text” name =“comment/“  required><br/>
<p>
どこで知ったか　　<input type="checkbox" name = "why" id="i4"><LABEL for="i4" >雑誌</LABEL><input type="checkbox" id="i5" ><LABEL for="i5">新聞</LABEL><br/>
<p>
質問カテゴリ　　　<input type="text" name="qa" required /></br>
<p>
質問内容<br/><textarea name="exmple" cols="50" rows="10" required></textarea><br/>
<p>
    <input type="submit" value="送信">
<input type="reset" value="リセット"> </div>
 </div>
</p>
</div>
</form>
</body>
</html>
