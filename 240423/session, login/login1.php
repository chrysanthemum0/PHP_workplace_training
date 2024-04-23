<?php

//세션 시작
session_start();

//login.html로 부터 받아온 값 변수에 저장 
if(isset($_POST['login']) === true){
    $login = trim($_POST['login']);
}

//login.html로 부터 받아온 값 변수에 저장 
if(isset($_POST['password']) === true){
    $password = trim($_POST['password']);
}

//아이디 패스워드 일치시 메시지 출력 그렇지 않으면 로그인 화면으로 돌아옴 
if($login === 'yamada' && $password === 'himitu'){
    $msg = 'ログイン成功しました。';
    $_SESSION['login'] = $login;
    $_SESSION['name'] = '山田';
} else{
    unset($_SESSION['login']);
    unset($_SESSION['name']);
    header('Location:login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $msg ?></p>
    <p><a href="login2.php">ログイン状態を確認する。</a></p>
</body>
</html>
