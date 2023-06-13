<h1>変数の基礎</h1>
<?php
$peach = '桃';   //「桃」という字を、peachという名前の変数に入れる

echo $peach;
echo '<br>';
print $peach;
?>


<h1>よくない変数名のつけ方</h1>
<?php
// $hensuu;          ← ローマ字
// $2021year;        ← 数字から始まる
// $へんすう; 　　　　← 日本語を入力
?>


<h1>定数</h1>
<?php
//定数の宣言方法は２つあります。
const Hoge = 20;
define('HogeHoge',30);

echo Hoge;      //20
echo '<br>';
echo HogeHoge;  //30
?>



<h1>変数と定数の違い</h1>

<?php
//変数は値を入れ替えられる
$number = 10;
echo $number;
echo '<br>' ;

$number = 8;
echo $number;
echo '<br>' ;

//定数は値を入れ替えられない
// const Hoge02 = 10;
// echo Hoge02;
// echo '<br>' ;

// const Hoge02 = 8;   //Hoge02定数の値を変えようとした
// echo Hoge02;        //エラー
?>