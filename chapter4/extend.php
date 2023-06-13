<?php
// ===継承===

// 親クラス
class User{
    public $name = 'Atlas太郎';

    public function hello(){
        echo $this->name . 'はUserクラスからきてます';
        echo '<br>';
    }
}

// 子クラス
class Admin extends User{
    public function hi(){
        echo '<p>下のテキストは、Adminクラスから来ています。</p>';
        echo $this->hello();
        echo '<br>';
    }
}

// インスタンス化(外部)
$user = new User();
$admin = new Admin();

echo $user->name . '<br>';
$user->hello();
$admin->hello();
$admin->hi();