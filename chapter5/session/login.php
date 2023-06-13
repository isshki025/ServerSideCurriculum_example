<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="">
</head>

<body>

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