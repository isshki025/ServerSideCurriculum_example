<!-- 指定されたセッションに関するコードを書いていきましょう。 -->
<?php
session_start();
unset($_SESSION["text"]);

echo $_SESSION['text'];
