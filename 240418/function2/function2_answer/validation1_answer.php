<?php
$name = '';
$gender = '';
// エラーメッセージが複数出力される可能性があるため、配列型として初期化する
$err_msg = array();
// 名前が入力されていなかったら、エラーメッセージを代入する
if (isset($_POST['name']) === true) {
  $name = trim($_POST['name']);
  if ($name === '') {
    $err_msg[] = 'お名前が入力されていません';
  }
} else {
  $err_msg[] = 'お名前が入力されていません';
}
// 性別が選択されていなかったら、エラーメッセージを代入する
if (isset($_POST['gender']) === true) {
  $gender = $_POST['gender'];
} else {
  $err_msg[] = '性別が選択されていません';
} ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>9.1.3 入力値のチェック</title>
</head>

<body>
  <form action="validation1.php" method="post">
    <p><label>名前（必須）：<input type="text" name="name"></label></p>
    <p>性別（必須）：<label>
        <input type="radio" name="gender" value="male">男</label>
      <label><input type="radio" name="gender" value="female">女</label>
    </p>
    <p><input type="submit" value="送信"></p>
    <?php // エラーメッセージがあれば1つずつ表示する
    if (empty($err_msg) === false) {
      foreach ($err_msg as $error) { ?>
        <p><?php echo $error; ?></p>
    <?php }
    } ?>
  </form>
  <h2>入力内容を表示</h2>
  <dl>
    <dt>名前：</dt>
    <dd><?= $name; ?></dd>
    <dt>性別：</dt>
    <dd><?php if ($gender === 'male') {
          echo '男';
        } elseif ($gender === 'male') {
          echo '女';
        } ?></dd>
  </dl>
</body>

</html>