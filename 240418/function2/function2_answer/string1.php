<?php
  $target = 'あいうえおABCDEFG1234567890';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>9.1.1 文字列取得・抜き出し・置換</title>
</head>
<body>
  <p>置換対象文字列：<?= $target; ?> </p>
  <p>文字数：<?= mb_strlen($target); ?></p>
  <p>部分抜き出し：<?= substr($target, 15, 5); ?></p>
  <p>置換：<?= str_replace('ABC', 'abc', $target); ?></p>
</body>
</html>