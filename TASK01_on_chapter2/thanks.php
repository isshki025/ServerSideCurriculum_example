<?PHP
// ➀confirm.phpからPOSTで６つの値を受け取れるようにしましょう。
$name = $_POST["name"];
$under_name = $_POST["under_name"];
$phone = $_POST["phone"];
$course_name = $_POST["course_name"];
$cost = $_POST["cost"];
$image = $_POST["image"];

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>

<body>
  <div class='wrapper'>
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
        <li class="light_gray">予約手続き</li>
        <li class="choice">予約完了</li>
      </ul>

      <div class="message">
        <h2>ご予約ありがとうございます</h2>
        <p class="thanks">以下の内容で承りました。ご来店お待ちしております。</p>
      </div>

      <!-- ➁confirm.phpから受け取ったデータを表示しましょう。 -->
      <div class="app_content confirm">
        <ul>
          <li>
            <span class="blue">ご予約者名</span><br>
            <?php echo "$name" . "$under_name"; ?> 様
          </li>
          <li>
            <span class="blue">ご連絡可能な電話番号</span><br>
            <?php echo $phone; ?>
          </li>
          <li>
            <span class="blue">コース</span><br>
            <?php echo $course_name; ?>
          </li>
          <li>
            <span class="blue">合計金額</span><br>
            ¥<?php echo $cost; ?>(税込み)
          </li>
        </ul>
        <figure class="image">
          <img src="<?php echo "images/" . $image; ?>">
        </figure>
      </div>
      <div class="top">
        <!-- ➂最初のindex.htmlに戻るリンクを書こう -->
        <input type="button" value="予約トップへ戻る" onClick="location.href='./index.html'" class="back">
      </div>
    </div>
    <footer>
    </footer>
  </div>
</body>

</html>
