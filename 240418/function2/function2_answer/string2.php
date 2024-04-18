<?php
  $text = '';
  if(isset($_POST['text']) === true) {
    $text = $_POST['text'];
  } ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
	<title>9.1.1 改行タグの挿入</title>
</head>
<body>
  <form action="string2.php" method="post">
    <p><textarea name="text" cols="40" rows="5"></textarea></p>
    <p><input type="submit" value="送信"></p>
  </form>
  <p>改行前：<?= $text; ?></p>
  <p>改行後：<?= nl2br($text); ?></p>
</body>
</html>