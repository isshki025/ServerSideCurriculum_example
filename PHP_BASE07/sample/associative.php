<h1>連想配列の書き方</h1>
<?php
$fruit = array(
       'red' => 'apple' ,
       'purple' => 'grape' ,
       'yellow' => 'banana'
);

$fruit = [
       'red' => 'apple' ,
       'purple' => 'grape' ,
       'yellow' => 'banana'
];

echo $fruit['purple'] ;

// 表示結果 :grape

// 連想配列はインデックス番号ではなく、「=>」の左側で設定したキーとなる文字列で値を指定できます。
// 　'キーの文字列'　=> '値'
?>