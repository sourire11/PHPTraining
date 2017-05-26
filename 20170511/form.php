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
        <div class="box15">
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

                <ul>
<form onsubmit="return false;">
<li> 姓 <span style="color:red">*</span>　　　　　　　<input type="text" class="required"　name="shi" required class="example1"  placeholder="例）山田"/ border-width:0px; outline:none;></br></li>
<p>
<li> 名 <span style="color:red">*</span>　　　　　　　<input type="text"  class="required"　name="mei" required class="example1"　 placeholder="例）花子"/></br></li><p>
<li> 性別      　　　　　   　<input type="radio"  id="男" name="sex" value="男"><LABEL for="男">男</LABEL><input type="radio" id="女" name="sex" value="女"><LABEL for="女">女</LABEL><input type="radio"  id="不明" name="sex" value="不明"><LABEL for="不明">不明</LABEL></li>
<p>
<li> 住所　　　　　　　<input type = "text" name ="add"  placeholder="例）東京都千代田区"></li>
<p>
<li> 電話番号 <span style="color:red">*</span>　　　　<input name="txt0" onkeyup="checkText(this)"  required class="example2" placeholder="03">-<input name="txt1" onkeyup="checkText(this)"  required class="example2"  placeholder="1234">-<input name="txt2" onkeyup="checkText(this)" required class="example2" placeholder="5678"></li>
<p>
<li> メールアドレス <span style="color:red">*</span>　<input type = "text" name ="mail1" required class="example1" placeholder="例）abc" >＠<input type = "text" name ="mail2"  required class="example1"placeholder="yahoo.co.jp"></li>
<p>
<li> どこで知ったか　　<LABEL><input type="checkbox" name ="why1" value="雑誌">雑誌</LABEL><LABEL><input type="checkbox" name = "why2" value="新聞" >新聞</LABEL></li>
<p>

<li> 血液型　　　　　<form>
                    <select name="example2">
                    <option value="A型">A型</option>
                    <option value="B型">B型</option>
                    <option value="O型">O型</option>
                    <option value="AB型">AB型</option></li>
</select></form>
<p>
<li> 質問内容                                       <textarea name="exmple" cols="40" rows="10" maxlength="35" class="input"  placeholder="こちらに入力してください"></textarea></li>
<p></ul>
    <script>
$(function () {
  $('#btn').click(function() {
    var id = $('[name="sex"]:checked').attr('id');
    console.log($('label[for="' + id + '"]').text());  // 結果：O型
  })
});
</script>
    <input type="submit" value="確認" class="square_btn">
<input type="reset" value="リセット" class="square_btn"> </div>
 </div>
</p>
</div>
</form>
</body>
</html>
