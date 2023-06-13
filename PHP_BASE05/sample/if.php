<h1>IF文の基礎</h1>

<?php
$text = "条件分岐" ;
if ($text == "条件分岐") {
  echo $text ;
}
?>

<?php
$number = 7 ;
$text = "IF文はじめました " ;
if ($number ===  7 && $text === "IF文はじめました ") {
  echo $text ;
}
?>


<h1>elseを加えた書き方</h1>

<?php
$number = 7 ;
$text = "IF文はじめました" ;
if ($number ===  7 && $text === "IF文はじめました" ) {
  echo $text ;
} else {
  echo $number ;
}
?>



<h1>else ifを加えた書き方</h1>

<?php
$number = 2 ;
$text = "IF文はじめました" ;
if ($number ===  2 && $text === "IF文はじめました" ) {
  echo $text ;
} else if ($number ===  2 || $text === "IF文はじまるまでお待ちください" ){
  echo "どちらかがあっている！" ;
}else {
  echo $number ;
}
?>



<h1>条件分岐の中に、条件分岐を入れる（入れ子）</h1>

<?php
$number = 2 ;
$text = "IF文はじめました" ;
$plus = 10 + 30 ;

if ($number ===  2 && $text === "IF文はじめました") {
  if ( $plus === 40 ) {
    echo $plus ;
  }
}
?>