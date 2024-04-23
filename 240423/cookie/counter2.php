<?php
  $log = './counter.log';
  $counter = 0;
  if ($fp = fopen($log, 'r')) {
	$counter = trim(fgets($fp));
	fclose($fp);
  }

  // Cookieがまだセットされていなければ
  // 新規訪問なので、カウンターを追加
  if (!isset($_COOKIE['accessed'])) {
	$counter++;
	setCookie('accessed', $counter);

	// ファイルに書き込み
	if ($fp = fopen($log, 'w')) {
	  fwrite($fp, $counter);
	  fclose($fp);
	}
  }
  echo $counter . '人目のお客様です。';