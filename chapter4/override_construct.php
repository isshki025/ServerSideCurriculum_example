<?php
// 親クラス
class User{
    public $name = 'Atlas太郎';

    public function __construct(){
        echo 'Userクラスのコンストラクタが実行され<br>' ;
    }
}

// 子クラス
class Admin extends User{
    public function __construct(){
        echo 'Adminクラスのコンストラクタが実行され<br>' ;
    }
}

// インスタンス化(外部)
$admin = new Admin();
?>