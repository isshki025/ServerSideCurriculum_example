<h1>WHILEを使った繰り返し処理</h1>

<?php

// シンプルなwhile文
$i = 1;

while ($i < 11) {
    echo $i;
    $i++;
    echo "<br>";
}
?>



<h1>breakがある場合</h1>

<?php
$x = 1;

while ($x < 11) {
    if ($x == 5) {
        break;
    }
    echo $x;
    $x++;
    echo "<br>";
}
?>



<h1>continueがある場合</h1>

<?php
$y = 1;

while ($y < 11) {
    if ($y == 5) {
        $y++;
        continue;
    }
    echo $y;
    $y++;
    echo "<br>";
}
?>