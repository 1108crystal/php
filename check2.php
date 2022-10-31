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
        $_SESSION['login'] = $user;
    }
}

    if($chk) {
        // $_SESSION['login'] = $formAcc;
        $times=$_COOKIE['times']+1;
        setcookie('times',$times,time()+(60*60*24*365));

    } else {
        // $_SESSION['error'] = "帳號或密碼錯誤";
        $error="帳號或密碼錯誤";
    }
 if(isset($error)) {
    header("location:login2.php?error=$error");
}else{
    header("location:login2.php");

 }
