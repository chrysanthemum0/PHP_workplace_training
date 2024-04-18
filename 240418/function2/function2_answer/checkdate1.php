<?php
  error_reporting(E_CORE_WARNING);
  $err_msg = array();
  if (is_numeric($_POST['year']) === true) {
    $year = trim($_POST['year']);
  } else {
    $err_msg[] = '年が入力されていません。';
  }
  if (is_numeric($_POST['month']) === true) {
    $month = trim($_POST['month']);
  } else {
    $err_msg[] = '月が入力されていません。';
  }
  if (is_numeric($_POST['day']) === true) {
    $day = trim($_POST['day']);
  } else {
    $err_msg[] = '日が入力されていません。';
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
	<title>9.2.2 日付チェック</title>
</head>    
<body>
  <form action="checkdate1.php" method="post">
    <p><label><input type="text" name="year" size="3">年</label>
      <label><input type="text" name="month" size="3">月</label>
      <label><input type="text" name="day" size="3">日</label></p>
      <p><input type="submit" value="チェック"></p>
  </form>

  <p><?php 
    if (count($err_msg) === 0 ){
      echo "$year 年 $month 月 $day 日は";
      if (checkdate($month, $day, $year)) {
        echo '妥当な日付です。';
      }else{
        echo '間違った日付です。';
      }
    } else {
      foreach($err_msg as $msg) {
        echo $msg;
      } 
    }?>
  </p>
 </body>
</html>