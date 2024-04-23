<?php
  $log = './counter.log';
  $counter = 0; 
  if ($fp = fopen($log, 'r')) {
	$counter = trim(fgets($fp));
	fclose($fp);
  }
  $counter++;	// カウントを1追加
  if ($fp = fopen($log, 'w')) {
	fwrite($fp, $counter);
	fclose($fp);
  }
  echo $counter . '人目のお客様です。';