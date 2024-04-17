<?php

    $a = 3;
    $msg = ''; //初期化

   switch($a){
    case 0: 
        $msg = '$a is 0';
        break;
    case 1:
        $msg = '$a is 1';
        break;    
    case 2:
        $msg = '$a is 2';
        break;
    case 3: 
        $msg = '$a is 3';
        break;
    default:
        $msg = '$a is not 0 ~ 3';
    
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR if</title>
</head>
<body>
    <?= $msg; ?>
</body>
</html>