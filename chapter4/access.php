<?php

// ==============================
// アクセス権：PUBLIC
// ==============================

// === 親クラス ===
class User{

    public $name = 'Atlas太郎';   //1⃣

    public function hello(){    //2⃣
        echo $this->name;
    }
}

// === 子クラス ===
class Admin extends User{

    public function hi(){                //3⃣
        echo $this->name;
    }
}


// === インスタンス化(クラス外部) ===
$user = new User();
$admin = new Admin();


echo $user->name . '<br>';   //⓵

echo $admin->name . '<br>';  //⓶

$user->hello();            //⓷
echo '<br>';

$admin->hi();              //⓸