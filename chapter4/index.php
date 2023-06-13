<?php

require_once('class.php');

$taro = new User('太郎');
// $nameに太郎のテキストが入り、$ageに25の数字が入る
// 3つ目の引数はないので、$hobbyは初期の空文字のままとなる

echo $taro->Hi();

?>