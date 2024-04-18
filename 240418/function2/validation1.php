<?php

    $name =''; //이름. 성별 사전정의 
    $gender = '';

    $err_msg = array(); //이름 입력안하면 에러메세지 대입 함 

    if(isset($_POST['name']) === true ){ // 이름이 입력되어 있다면 
        $name = trim($_POST['name']); // 반각, 전각 확인
        if($name === ''){ // 전각 반각이면 공백으로 판단해서
            $err_msg[] = 'Please Enter to Your Name.'; // 에러메세지 출력 
        }
    } else { // 공백 에러메시지 출력 
        $err_msg[] = 'Please Enter to Your Name.';
    }

    if(isset($_POST['gender']) === true){ // 성별 입력헸으면 
        $gender = $_POST['gender']; // 성별 출력 
    } else { // 입력안하면 에러메세지 출력 
        $err_msg[] = 'Please Enter to Your Gender.';
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
    <form action="validation1.php" method="post">
      <p><label>Name(*) : <input type="text" name="name"></label></p>
      <p>Gender(*) : <label>
        <input type="radio" name="gender" value="male">male</label>
        <label><input type="radio" name="gender" value="female">female</label>
      </p>
        <p><input type="submit" value="送信"></p>
    <?php
        if(empty($err_msg) === false ){
            foreach ($err_msg as $error) {?> 
                <p><?= $error; ?></p>
            <?php }
        }
    ?>
    </form>
    <h2>Check Your INFO</h2>
    <dl>
        <dt>Name : </dt>
        <dd><?= $name; ?></dd>
        <dt>Gender : </dt>

        <dd><?php
            if($gender === 'male'){
                echo 'Your Gender is male';
            } elseif($gender === 'female'){
                echo 'Your Gender is female';
            }
            ?></dd>
    </dl>
</body>
</html>
