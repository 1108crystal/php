<?php
session_start();

// $acc = 'crystal';
// $pw = '1234';
$users = [
    [
        "name" => "mack",
        "pw" => "1234",
        "level" => "admin",
    ],
    [
        "name" => "crystal",
        "pw" => "1234",
        "level" => "vip",
    ],
    [
        "name" => "mary",
        "pw" => "1234",
        "level" => "user",
    ]
];

$formAcc = $_POST['acc'];
$formPw = $_POST['pw'];
$chk=false;

foreach($users as $user){
    if($user['name']==$formAcc && $user['pw']==$formPw){
        $chk=true;
    }
}

    if($chk) {
        $_SESSION['login'] = $formAcc;
    } else {
        $_SESSION['error'] = "帳號或密碼錯誤";
    }
 header("location:login2.php");
