<?php
require_once("common.php");

$id = intval($_GET["id"]);

$sql = "SELECT id,username,mail FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute(array(':id' => $_GET["id"]));

$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

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
    <h1>リストの更新<br><span class="sub">-update-</span></h1>
  </header>
  <div id="content">
    <form action="update.php" method="post" onsubmit="return check()" id="content">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <h2><span class="strong">「ID:<span class="orange"><?php echo htmlspecialchars($id); ?></span>」</span>の登録情報を以下に変更します。</h2>
      <div class="form_input">
        <div class="username">
          <label>ユーザー名</label>
          <input type="text" name="username" value="<?php echo htmlspecialchars($result['username']); ?>">
        </div>
        <div class="mail">
          <label>メールアドレス</label>
          <input type="mail" name="mail" value="<?php echo htmlspecialchars($result['mail']); ?>">
        </div>
      </div>
      <div class=" form_btn">
        <div class="form_return_btn">
          <p class="return">
            <a href="list.php">リスト表に戻る</a>
          </p>
        </div>
        <div class="form_create_btn">
          <input type="submit" value="更新する">
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript">
    function check() {
      if (window.confirm('更新をしてよろしいですか？')) {
        return true;
      } else {
        window.alert('更新がキャンセルされました');
        return false;
      }
    }
  </script>
</body>

</html>
