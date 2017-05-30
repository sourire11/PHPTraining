
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta http-equiv="Content-Style-Type" content="text/css" charset = "UTF-8">
<link rel="stylesheet" type="text/css" href="sample.css">
<title>フォームからデータを受け取る</title>
</head>
<body>
    <div class="main">
    <div class="parent">
  <div class="inner">
      <div class="txt">
    <div class="tablecell">

        <div class="box15">
    <h2>お問い合わせフォーム</h2>
    <span style="color:red">*</span>は必ず入力してください。</br>
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
<li> 姓 <span style="color:red">*</span>　　　　　　　<input type="text" name="shi" class="required"　 required class="example1"  placeholder="例）山田"/ border-width:0px; outline:none;></br></li>
<p>
<li> 名 <span style="color:red">*</span>　　　　　　　<input type="text"  name="mei" class="required"　 required class="example1"　 placeholder="例）花子"/></br></li><p>
<li> 性別      　　　　　   　<input type="radio"  id="男" name="sex" value="男"><LABEL for="男">男</LABEL><input type="radio" id="女" name="sex" value="女"><LABEL for="女">女</LABEL><input type="radio"  id="不明" name="sex" value="不明"><LABEL for="不明">不明</LABEL></li>
<p>
    <script type="text/javascript" src="js/ajaxzip3.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <form>
<li> 郵便番号　　　　　<input type="text" name="zip" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" placeholder="例）1000005"></li>
<li> 住所　　　　　　　<input type="text" name="address" placeholder="例）東京都千代田区" size="40"></li>
    </form>
<p>
<li> 電話番号 <span style="color:red">*</span>　　　　<input name="txt0" onkeyup="checkText(this)"  required class="example2" placeholder="03">-<input name="txt1" onkeyup="checkText(this)"  required class="example2"  placeholder="1234">-<input name="txt2" onkeyup="checkText(this)" required class="example2" placeholder="5678"></li>
<p>
<li> メールアドレス <span style="color:red">*</span>　<input type = "text" name ="mail1" required class="example1" placeholder="例）abc" >＠<select name="mail2" equired class="example1">
                             <option value="yahoo.co.jp">yahoo.co.jp</option>
                             <option value="gmail.com">gmail.com</option>
                             <option value="softbank.ne.jp">softbank.ne.jp</option>
                             <option value="docomo.ne.jp">docomo.ne.jp</option>
                             <option value="ezweb.ne.jp">ezweb.ne.jp</option>
    </select></li>
<p>
<li> どこで知ったか　　<LABEL><input type="hidden" name="why1" value="　"><input type="checkbox" name ="why1" value="雑誌">雑誌</LABEL><LABEL><input type="hidden" name="why2" value="　"><input type="checkbox" name = "why2" value="新聞" >新聞</LABEL></li>
<p>
<li> 質問カテゴリ　　　<select name="category">
                         <option value="１について">１について</option>
                         <option value="２について">２について</option>
                         <option value="３について">３について</option>
                         <option value="４について">４について</option>
</select></li>
<li>  質問内容　　　　　<textarea name="exmple" cols="40" rows="10" maxlength="35" class="input"  placeholder="こちらに入力してください"></textarea></li>
<p></ul>
    <script>
$(function () {
  $('#btn').click(function() {
    var id = $('[name="blood"]:checked').attr('id');
    console.log($('label[for="' + id + '"]').text());
  })
});
</script>
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
    <input type="submit" value="確認" class="square_btn">
<input type="reset" value="リセット" class="square_btn"> </div>
 </div></div>
</p>
</div>
</form>
</body>
</html>
