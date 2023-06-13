<h1>関数の基本</h1>

<?php
// test関数を用意する
function test()
{
    echo "関数のサンプル集です。<br>";
    echo "上の文章とこの文章は、一つの関数内で実行されてます。<br>";
}

// test関数の中身を実行する
test();

?>



<h1>関数の引数</h1>

<?php
// test2関数を定義する
function test2($first, $second)
{
    echo "関数の".$first."です。<br>";
    echo "上の文章とこの文章は、1つの".$second."で実行されてます。<br>";
}

//test関数の中身を実行する
test2('引数解説','関数と2つの引数');

?>



<h1>同じ商品を〇個購入したときの、税込み価格</h1>

<?php
function tax($rate, $i)
{
    $multiply = $rate * $i;
    $result = $multiply * 1.10;
    return $result;
}

$price = tax(1500, 5);
echo "税込みで{$price}円となります。";

?>




<h1>PHPの公式が用意している関数</h1>

<?php
$text = "12";
$array = [0, 1, 2];

echo "<p>intval関数</p>";
$sum = intval($text) + 3;
echo $sum."<br>";

echo "<p>count関数</p>";
$count = count($array);
echo $count . "<br>";

?>



<h1>IFの条件によく使われる関数</h1>

<?php

// 条件分岐によく使われる組み込み関数
if (isset($text)) {
    echo '変数$textは値が入っている変数です<br>';
}
if (empty($text)) {
    echo '変数$textは値が空でした<br>';
}
if (is_array($array)) {
    echo '変数$arrayは配列です。<br>';
}
?>



<h1>ローカル変数とグローバル化</h1>

<?php
function globalization()
{
    $x = "3";
}
echo $x ;
// これがエラーになります。

?>