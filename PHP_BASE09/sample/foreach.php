<h1>FOREACHを使った繰り返し処理</h1>

<?php

// 配列
$i = [
    1, 2, 3
];

// 連想配列
$lists = [
    "もも" => "peach","りんご" => "apple", "ばなな" => "banana", "ぶどう" => "grape", "みかん" => "orange"
];

//配列を順に使う
foreach ($i as $ai) {
    echo $ai;
    echo "<br>";
}

echo "<br>";

// 連想配列を順に使う
foreach ($lists as $list) {
    echo $list . "<br>";
}

echo "<br>";

// 配列,連想配列のキーも値として使う
foreach ($lists as $key => $list) {
    echo "キーは「" . $key . "」<br>";
    echo "値は「" . $list . "」<br>";
}