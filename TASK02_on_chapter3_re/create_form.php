<?php header("X-FRAME-OPTIONS: DENY"); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>3章CRUD実装-課題-</title>
</head>

<body>
  <header>
    <div class="icon">
      <a href="list.php">
        <img src="./img/atlas.png" alt="atlas">
      </a>
    </div>
    <h1>新規登録<br><span class="sub">-create-</span></h1>
  </header>
  <div id="content">
    <form action="create.php" method="post" onsubmit="return check()" id="content">
      <h2><span class="strong orange">新しく登録する</span>ユーザーを<br class="sp">作成しましょう。</h2>
      <div class="form_input">
        <div class="username">
          <label>ユーザー名</label>
          <input type="text" name="username">
        </div>
        <div class="mail">
          <label>メールアドレス</label>
          <input type="mail" name="mail">
        </div>
      </div>
      <div class="form_btn">
        <div class="form_return_btn">
          <p class="return">
            <a href="list.php">リスト表に戻る</a>
          </p>
        </div>
        <div class="form_create_btn">
          <input type="submit" value="新規登録">
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript">
    function check() {
      if (window.confirm('登録をしてよろしいですか？')) {
        return true;
      } else {
        window.alert('登録がキャンセルされました');
        return false;
      }
    }
  </script>
</body>

</html>
