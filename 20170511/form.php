<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="sample.css">
<title>フォームからデータを受け取る</title>
</head>
<body>
    <div class="parent">
  <div class="inner">
      <div class="txt">
    <div class="tablecell">
    <div class="main">
    <h2>お問い合わせ</h2>
    <!-- データ入力フォーム -->
<form method="POST" action="indexl.php">

    <script type="text/javascript"><!--
//関数 checkText の定義 (引数:テキストインプット)
function checkText(txt_obj){
    //テキストインプット内の入力値を変数化
    var str = txt_obj.value;
    //入力値に 0～9 以外があれば
    if(str.match(/[^0-9]+/)){
        alert("半角数字のみを入力してください。");
        // 0～9 以外を削除
        txt_obj.value = str.replace(/[^0-9]+/g,"");
    }
}
// --></script>
<div class="sample-box-12">
<form onsubmit="return false;">
姓　　　　　　　　<input type="text" name="shi" required class="example1"/></br>
<p>
名　　　　　　　　<input type="text" name="mei" required class="example1"/></br>
<p>
性別　　　　　　　<input type="radio" id="男" name="sex" value="男"><LABEL for="男">男</LABEL>
　<input type="radio" id="女" name="sex" value="女"><LABEL for="女">女</LABEL>
　<input type="radio" id="不明" name="sex" value="不明"><LABEL for="不明">不明</LABEL>
<br/>
<p>
住所　　　　　　　<input type = "text" name ="add" required><br/>
<p>
電話番号　　　　　<input name="txt0" onkeyup="checkText(this)"  required class="example2">-<input name="txt1" onkeyup="checkText(this)"  required class="example2">-<input name="txt2" onkeyup="checkText(this)" required class="example2"><br/>
<p>
メールアドレス　　<input type = "text" name ="mail1" required>＠<input type = "text" name ="mail2"  required><br/>
<p>
どこで知ったか　　<input type="checkbox" name ="why1" value="雑誌">雑誌
<input type="checkbox" name = "why2" value="新聞" >新聞<br/>
<p>
血液型　　　<form>
<select name="example2">
<option value="A型">A型</option>
<option value="B型">B型</option>
<option value="O型">O型</option>
<option value="AB型">AB型</option>
</select></form>
<p>
質問内容<br/><textarea name="exmple" cols="50" rows="10" required></textarea><br/>
<p>
    <script>
$(function () {
  $('#btn').click(function() {
    var id = $('[name="sex"]:checked').attr('id');
    console.log($('label[for="' + id + '"]').text());  // 結果：O型
  })
});
</script>
    <input type="submit" value="確認">
<input type="reset" value="リセット"> </div>
 </div>
</p>
</div>
</form>
</body>
</html>
