<?php
    $shi = $_POST["shi"];
        $mei = $_POST["mei"];
        $add = $_POST["add"];
        $tel = $_POST["tel"];
        $mail = $_POST["mail"];
        $qa  = $_POST["qa"];
        $example  = $_POST["example"];
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="form.css">
</head>
<body>
            <h1 class="contact-title">確認画面</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>

                    <label>姓</label> <?php echo $shi; ?><p>
                    <label>名</labe> <?php echo $mei; ?><p>
                    <label>住所</label><?php echo $add; ?><p>
                    <label>電話番号</label><?php echo $tel; ?><p>
                    <label>メールアドレス</label><?php echo $mail; ?><p>
                    <label>質問カテゴリ</label><?php echo $qa; ?><p>

        <input type="button" value="戻る" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>
