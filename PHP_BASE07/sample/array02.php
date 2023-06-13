<h1>値の更新 </h1>

<?php
$fruit = ['apple','orange','grape','peach','banana'];

$fruit[1] ='melon';

echo $fruit[1] ;

// 表示結果 : melon
?>




<h1>値の追加</h1>

<?php
$fruit = ['apple','orange','grape','peach','banana'];

$fruit[] = 'melon';

echo $fruit[5] ;

// 表示結果 melon
?>