<?php
function toeic($point){
    if($point < 400){
        $level = '英検3~5級程度';
    }elseif($point >= 400 && $point < 500){
        $level = '英検準2級程度';
    }
    //➀残りの条件も作ってあげよう

    //➁戻り値で英検がどのレベルかを渡してあげるようにしよう。

}


//➂toeic関数の結果が入る$text変数に定義しよう
// $text = ;
// echo "あなたの英語力は{$text}となります。";
?>