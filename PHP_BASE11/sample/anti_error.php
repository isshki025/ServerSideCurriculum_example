<h1>処理のエラー例</h1>

<?php
// サンプル用関数「税込みで合計価格を求めるprice関数」
function price($rate, $number)
{
    return $rate * $number * 1.10;
}

$a = "二千四百";
$b = 5;

echo "お買い物の合計は";
echo price($a, $b);
echo "でした！";


// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// TRY/CATCH
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

// try {
//     エラーが起こる可能のある処理
//     ~
//     ~
// } catch (Exception $e) {
//     エラーが起こった際に行う処理
// }

?>

<h1>TRY/CATCHとTHROWの組み合わせ</h1>

<?php
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// THROW句
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

try {
    $a = "二千四百";
    $b = 5;

    if (is_int($a) && is_int($b)) {
        echo "お買い物の合計は";
        echo price($a, $b);
        echo "でした！";
    } else {
        throw new Exception('引数には数値以外を設定しないでください');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>