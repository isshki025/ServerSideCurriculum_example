
<h1>POSTでフォーム送信がきた場合</h1>

<?php
echo '<h2>お名前は</h2>';
echo $_POST['username'] . '<br>';

echo '<h2>メールアドレスは</h2>';
echo $_POST['mail'] . '<br>';

echo '<h2>問い合わせ内容は</h2>';
echo $_POST['format'] . '<br>';

echo '<h2>選んだ色は</h2>';
echo $_POST['color'] . '<br>';

echo '<h2>性別は</h2>';
echo $_POST['gender'] . '<br>';
?>




<h1>GETでフォーム送信がきた場合</h1>

<?php
// echo '<h2>お名前は</h2>';
// echo $_GET['username'].'<br>';

// echo '<h2>メールアドレスは</h2>';
// echo $_GET["mail"].'<br>';

// echo '<h2>問い合わせ内容は</h2>';
// echo $_GET["format"].'<br>';

// echo '<h2>選んだ色は</h2>';
// echo $_GET['color'].'<br>';

// echo '<h2>性別は</h2>';
// echo $_GET['gender'].'<br>';
?>