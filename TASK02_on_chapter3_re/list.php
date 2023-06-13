<?php
require_once("common.php");



//条件分岐
//もし検索欄に何か記入があったらその記入された文言で曖昧検索
//そうでなく、検索欄が空だったら、全部のデータを表示
if (!empty($_POST["search"])) {
  $search = $_POST["search"];  //とりあえず、触りやすいようにPOSTで受け取ったsearchを変数化
  $sql = "SELECT * FROM users WHERE username LIKE '%" . $search . "%' ORDER BY id ASC"; //曖昧検索と結果の並び替え
  $stmt = $pdo->prepare($sql); //sqlを使えるように
  $stmt->execute(); //sql文の実行
  // $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //んでそれを全部配列化
} else {
  $sql = "SELECT * FROM users ORDER BY id ASC"; //全部表示と結果の並び替え
  $stmt = $pdo->query($sql);
}
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>3章CRUD実装-課題-</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/base.js"></script>
</head>

<body>
  <header>
    <div class="icon">
      <a href="#">
        <img src="./img/atlas.png" alt="Atlas">
      </a>
    </div>
    <h1>リストの表示<br><span class="sub">-list-</span></h1>
  </header>
  <div id="content">
    <div class="create_btn">
      <button>
        <a href="create_from.php"><i class="fas fa-plus-circle">新規登録はこちら</i></a>
      </button>
    </div>
    <?php
    if (isset($_POST['search']) && !empty($_POST['search'])) { ?>
      <p class="return_empty"><a href="list.php"><i class="fa fa-angle-double-left"></i>一覧表示に戻る</a></p>
    <?php } ?>
    <div id="search">
      <form action="list.php" method="post">
        <input type="text" name="search" value="" placeholder="ユーザー名で検索">
        <button id="sbtn" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <table style="border-collapse: separate">
      <tr>
        <td class="id">ID</td>
        <td class="name">NAME</td>
        <td class="mail">MAIL</td>
        <td class="up">EDIT</td>
        <td class="dele">DELETE</td>
      </tr>
      <?php foreach ($result as $list) { ?>
        <tr>
          <td class="id"><?php echo htmlspecialchars($list["id"]); ?></td>
          <td class="name"><?php echo htmlspecialchars($list["username"]); ?></td>
          <td class="mail"><?php echo htmlspecialchars($list["mail"]); ?></td>
          <td class="up"><a href="update_from.php?id=<?php echo htmlspecialchars($list["id"]); ?>"><i class="fas fa-file-alt"></i></a></td>
          <td class="dele">
            <a href="delete.php?id=<?php echo htmlspecialchars($list["id"]); ?>" onclick="return confirm('このレコードを削除します。よろしいでしょうか？')">
              <i class="fas fa-trash-alt"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>

</html>
