<?php
require_once("common.php");
$name = $_POST["username"];
$mail = $_POST["mail"];
$id = intval($_POST["id"]);

$sql = "UPDATE users SET username=:name,mail=:mail WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute();

$result = 0;
$result = $stmt->fetch(PDO::FETCH_ASSOC);

header("Location: list.php");
exit;
