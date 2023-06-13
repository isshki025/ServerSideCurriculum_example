<?php
header("X-FRAME-OPTIONS: DENY");


//-------------------------------
//データベースに繋げる処理
//-------------------------------
//1.値の用意
//1-1.定数の定義("定数名, "値")
define("HOST", "localhost");
define("DB_NAME", "task02");
define("USER", "root");
define("PASS", "root");
//1-2.文字コードの指定をoptions変数化
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");

//2.PDOの初期設定(MySQLを使用,DB名,ログインユーザー,パスワード,オプション(options変数から呼び出し))
//※上記定数と変数(defineの記述&$〇〇の記述)がnew PDOの引数に使用されている。
//ちなみにPDOは、PHP Data Objectの略
$pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS, $options);

//3.PDOの設定変更 ->setAttribute(設定項目, 設定内容);
//3-1.PDOのエラーモードの変更(エラーがでたら停止する)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//3-2.どうやら、不正利用を防げるらしい(word:プリペアドステートメントの使用, SQLインジェクション)
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


//デバッグ用
function v($y)
{
  echo "<pre class='var_dump'>";
  var_dump($y);
  echo "</pre>";
}
