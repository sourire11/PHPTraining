 <!DOCTYPE html>
 <html lang = "ja">
 <head>
 <meta charset = "UFT-8">
 <title>フォームからデータを受け取る</title>
 <link rel="stylesheet" href="form.css">
 </head>
 <body>
 <h1>お問い合わせ</h1>
 <form action = "index.php" method = "post">
姓　　<input type="text" name="氏名" /></br>
名　　<input type="text" name="氏名" /></br>
性別　<input type="radio" name="q1" id="i1"><LABEL for="i1">男</LABEL>
<input type="radio" name="q1" id="i2"><LABEL for="i2">女</LABEL>
<input type="radio" name="q1" id="i3"><LABEL for="i3">不明</LABEL><br/>
住所     <input type = “text” name =“comment/“><br/>
電話番号 <input type = “text” name =“comment/“>ー<input type = “text” name =“comment/“>ー<input type = “text” name =“comment/“><br/>
メールアドレス <input type = “text” name =“comment/“>＠<input type = “text” name =“comment/“><br/>
どこで知ったか<input type="checkbox" id="i4"><LABEL for="i4">雑誌</LABEL><input type="checkbox" id="i5"><LABEL for="i5">新聞</LABEL><br/>
質問カテゴリ　　<input type="text" name="氏名" /></br>
質問内容<br/><textarea name="example" cols="50" rows="10"></textarea><br/>
 <input type="submit" value="送信">
 <input type="reset" value="リセット">
 </form>
 </body>
 </html>
