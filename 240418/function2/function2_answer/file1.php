<?php
  // 書き込むデータ
  $data = "PHPによってファイルに書き込まれた文字列\n";
  $arr = array();
  // 追記モードでファイルオープン
  $fp = fopen('./data/test.txt', 'a');
  // 3行書き込み
  fputs($fp, $data);
  fputs($fp, $data);
  fputs($fp, $data);
  // クローズ
  fclose($fp);
  // 読み込みモードでファイルオープン
  $fp = fopen('./data/test.txt', 'r');
  while (!feof($fp)) {
    // 1行ずつ取得して配列に追加
    $arr[] = fgets($fp);
  }
  // クローズ
  fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>9.3.1 ファイル操作</title>
</head>  
<body>
  <h1>ファイルの内容</h1>
  <?php
    foreach($arr as $line) { ?>
      <p><?= $line; ?><p>
    <?php } ?>
</body>
</html>