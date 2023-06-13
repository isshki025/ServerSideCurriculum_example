<?php
// =========
// ↓ ➀index.htmlから「コース」と「人数」のデータを取得する変数を用意しよう
// =========


// =======
// ↓ ➁条件分岐を使って、４つのコースごとに予算,コース名,画像名を用意できるようにしよう
// =======
$cost = 0;
if ($course == "") {
    $cost =  ;
    $course_name = "";
    $image = "";
} else if ($course == "") {
    $cost =  ;
    $course_name = "";
    $image = "";
} else if ($course == "") {
    $cost =  ;
    $course_name = "";
    $image = "";
} else {
    $cost = ;
    $course_name = "";
    $image = "";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="header-wrapper">
        <div class="header-content">
          <h1>大衆居酒屋あとらす　Izakaya&nbsp;Atlas</h1>
          <p><span class="noon">11:00~14:00</span>　<span class="night">17:00~24:00</span></p>
        </div>
      </div>
    </header>

    <div id="content">
      <ul class="procedure">
        <li class="gray">コース選択</li>
        <li class="choice">予約手続き</li>
        <li class="light_gray">予約完了</li>
      </ul>

      <div class="confirm">
        <ul>
          <!-- ➂index.htmlから受け取った値を表示してみよう -->
          <li>
            <span>コース</span><br>
            <?php echo ; ?>
          </li>
          <li><span>人数</span><br>
            <?php echo ; ?>名様
          </li>
          <li><span>合計金額</span><br>
            ¥<?php echo $; ?> (税込み)
          </li>
        </ul>
        <figure class="image">
          <!-- ➂選んだコース画像を表示できるようにしよう -->
          <img src="<?php echo "images/".〇〇; ?>">
        </figure>
      </div>

      <h3 class="center">上記の内容でお間違いがなければ、お客様情報をお願いいたします。</h3>
      <!-- ➃送信方法を決めましょう。 -->
      <form action="thanks.php" method="post">
        <ul class="persona">
          <li>
            <label>ご予約者名<span class="red">*</span></label>
            <div>
              <!-- ⑤入力項目を必須化させよう -->
              <!-- ⑤プレースホルダを使って、氏名の箇所をわかりやすくしてみよう-->
              <input type="text" name="name" class="name">
              <input type="text" name="under_name" class="name">
            </div>
          </li>
          <li>
            <label>連絡可能な電話番号<span class="red">*</span></label>
            <div>
              <input type="tel" name="phone" class="phone" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}">
              <input type="reset" value="情報をリセット" />
            </div>
          </li>
          <!-- ➅送り先のthanks.phpに届けるために「見えないデータ」として、コース名・合計金額・画像ファイル名を配置してみましょう -->

          <input type="button" class="back" onclick="history.back()" value="変更する">
          <input type="submit" class="submit" value="予約を確定する">
        </ul>
      </form>
    </div>
    <footer>
    </footer>
  </div>
</body>

</html>