<h1>SWITCH文の基本構文</h1>

<?php
$price = 2400 ;
switch ( $price ) {
  case 2000 :
    echo '2000円です' ;
    break ;
  case 2400 :
    echo '2400円です' ;
    break ;
  case 3000 :
    echo '3000円です' ;
    break ;
}
?>



<h1>SWITCH文の基本構文</h1>

<?php
$price = 2400 ;
switch ( $price ) {
  case 2000 :
      echo '2000円です' ;
      break ;
  case 2400 :
      echo '2400円です' ;    //表示される
                              //breakがないので、次のcaseに進んでしまいます。
  case 3000 :
      echo '3000円です' ;    //こっちも表示される
      break ;
}
?>