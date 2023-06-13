<?php
session_start();

$errors = array();
// 最初の訪問、index.phpからきた時にセッション記録を破棄する為に追加する
unset($_SESSION["username"], $_SESSION["pass"]);

// ⓵ランダムな文字を生成しています。
$csrf_token = 'bb171c7c9483a9c8f947ab3ccdcda5e8';

// ⓶セッションにランダムな文字を記録しておきます。
$_SESSION['csrf_token'] = $csrf_token;
if (!empty($_POST["submit"]) && $_POST["csrf_token"] === $_SESSION['csrf_token']) {

  $username = $_POST["username"];
  $pass = $_POST["pass"];

  if (!$username == "" && !$pass == "") {
    $_SESSION["username"] = $username;
    $_SESSION["pass"] = $pass;
    header("Location: index.php");
  } else {
    if ($username === "") {
      $errors["username"] = "ユーザー名が入力されていません。";
    }
    if ($pass === "") {
      $errors["pass"] = "パスワードが入力されていません。";
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="">
</head>

<body>
  <?php
  if (isset($errors)) {
    echo "<ul>";
    foreach ($errors as $value) {
      echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
  }
  ?>
  <form action="login.php" method="post">

    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
    <label>ユーザー名:</label>
    <input type="text" name="username" /><br>
    <label>パスワード：</label>
    <input type="text" name="pass" /><br>
    <!-- このファイルに再度飛んでログインできるかを確認させる -->
    <input type="submit" value="ログイン">
  </form>


</body>

</html>
