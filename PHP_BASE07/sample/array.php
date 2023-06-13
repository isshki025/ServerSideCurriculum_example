
<h1>配列の基本構文</h1>
<!--
===== 配列の書き方 =====
-->
<?PHP
$fruit = array ('apple','orange','grape','peach','banana');

$fruit = ['apple','orange','grape','peach','banana'] ;

//複数の値を入れられる配列の記述方法は２つあります。
//下の記述の方がシンプルです。
?>




<!--
===== 値の取り出し方 =====
-->
<?php
echo $fruit[2] ; //インデックス番号は0から始まります。
?>