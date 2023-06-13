<?php
session_start();
$_SESSION["text"] = "セッションのテストです。";

echo $_SESSION["text"];

?>
