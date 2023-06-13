<?php
header('Content-type: application/json; charset=UTF-8');
$text = filter_input(INPUT_GET, 'val');

$data = [];

if ($text == '3の倍数') {
    $data = [3, 6, 9, 12, 15];
} else if ($text == '4の倍数') {
    $data = [4, 8, 12, 16, 20];
} else if ($text == '5の倍数') {
    $data = [5, 10, 15, 20, 25];
} else if ($text == '6の倍数') {
    $data = [6, 12, 18, 24, 30];
}

echo json_encode($data);
exit; //処理の終了
