<?php
//===オーバーライド===

// 親クラス
class User{
    public $name = 'Atlas太郎';

    public function hello(){
        echo $this->name;
        echo '<br>';
    }
}

// 子クラス
class Admin extends User{
    public function hello(){
        echo 'Atlas花子';
        echo '<br>';
    }

    public function Hi(){
        parent::hello();
    }
}

// インスタンス化(外部)
$admin = new Admin();

$admin->hello();
//↑ UserとAdminのどちらのhelloメソッドが実行される？

$admin->Hi();