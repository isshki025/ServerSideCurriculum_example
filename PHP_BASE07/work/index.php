<!-- 問題演習 -->
<?php

$text =[
    [
        'name' => 'Atlasあかり',
        'age' => 18,
        'profession' => '学生'
    ],
    [
        'name' => 'Atlasよしひこ',
        'age' => 34,
        'profession' => 'パイロット'
    ],
    [
        'name' => 'Atlasこうき',
        'age' => 29,
        'profession' => '営業'
    ],
    [
        'name' => 'Atlasみつき',
        'age' => 41,
        'profession' => '管理部部長'
    ],
    [
        'name' => 'Atlasえり',
        'age' => 32,
        'profession' => 'イラストレーター'
    ]
];

//「Atlasこうき」さんのお仕事は？ に書き換えましょう。
echo $text[2]['name'] . 'さんのお仕事は' . $text[2]['profession'] . 'です。';
?>
