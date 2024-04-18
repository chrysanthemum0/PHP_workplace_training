<?php
  error_reporting(E_CORE_WARNING);
  // フォームから送られたデータがあれば、それを書き込む
  if (isset($_POST['comment'])) {
	file_put_contents('./data/test2.txt', 
	$_POST['comment'] . "\n", FILE_APPEND);
  }
  // ファイルの内容をすべて取得
  $data = file_get_contents('./data/test2.txt');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ファイルを一括処理する関数</title>
</head>
<body>
  <h1>ファイルの内容</h1>
  <p><?php
    if (!$data) {
	  echo "ファイルが空あるいは見つかりません";
	} else {
	  //表示
	  echo nl2br($data);
	}
  ?></p>
  <hr>
  <form action="file2.php" method="post">
	<p><label>コメント：<input type="text" name="comment" size="40"></label>
       <input type="submit" value="書き込み"></p>
  </form>
</body>
</html>