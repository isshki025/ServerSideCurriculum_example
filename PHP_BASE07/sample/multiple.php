<h1>多次元配列</h1>

<!--
===== 多次元配列の書き方 =====
-->
<?php
$users = array(
    array(
        'username' => 'Atlasタロウ',
        'password' => 'atlas_hogehoge01',
    ) ,
    array(
        'username' => 'Atlasマリー',
        'password' => 'atlas_hogehoge02',
    )
);
?>



<!--
===== 値の取り出し方 =====
-->
<?php
echo $users[1]['username'] ; //DAWNマリーが表示されます。
?>
