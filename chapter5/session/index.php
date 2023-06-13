<?php
session_start();
echo "このIDをセッションで記録しています。:" . $_SESSION["username"] . "<br>";
echo  "このパスワードをセッションで記録しています。：" . $_SESSION["pass"] . "<br>";
?>
<a href="login.php">ログアウト</a>
