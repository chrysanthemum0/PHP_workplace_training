<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
	<title>9.2.1 日付情報の取得</title>
</head>
<body>
  <dl>
    <dt>date関数による日付文字列</dt>
    <dd><?= date('Y/m/d H:i:s'); ?></dd>
    <dt>date関数による日付文字列</dt>
    <dd><?= date('M d, Y h:i:s A'); ?></dd>
    <dt>getdate関数による配列</dt>
    <dd><pre><?php print_r(getdate()); ?></pre></dd>
    <dt>time関数によるエポック</dt>
    <dd><?= time(); ?></dd>    
  </dl>
</body>
</html>