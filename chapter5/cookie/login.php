<?php
if (!empty($_POST['submit'])) {
    if ($_POST['username'] && $_POST['password']) {
        setcookie('name', $_POST['username'], time() + 180);
        setcookie('pass', $_POST['password'], time() + 180);
        header("Location: welcome.php");
    } else {
        setcookie('name', $_POST['username'], time() - 1800);
        setcookie('pass', $_POST['password'], time() - 1800);
        var_dump('クッキー破棄成功');
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
    <form action="login.php" method="post">
        <?php if (!empty($_COOKIE['name']) && !empty($_COOKIE['pass'])) { ?>

            <label>ユーザー名</label>
            <input type="text" name="username" value="<?= $_COOKIE['name']; ?>"><br>
            <label>パスワード</label>
            <input type="text" name="password" value="<?= $_COOKIE['pass']; ?>"><br>

        <?php } else { ?>

            <label>ユーザー名</label>
            <input type="text" name="username"><br>
            <label>パスワード</label>
            <input type="text" name="password"><br>

        <?php } ?>

        <input type="submit" value="ログイン" name="submit">
    </form>
</body>

</html>
