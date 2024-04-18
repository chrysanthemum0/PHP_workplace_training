<?php

    $arr = array('white', 'black', 'blue', 'green', 'red', 'gray', 'IndianRed', 'Salmon',
    'DarkRed', 'Pink');
    $arr_count = count($arr);
    $max_page = ceil($arr_count / 5);

    if(isset($_GET['page'])){
        $p = $_GET['page'];
    } else {
        $p = 1; 
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Parameter</title>
</head>
<body>
    <p><?= $p; ?>PAGE</p>

    <table border="1">
        <?php 
            for($i = ($p - 1) * 5; $i < $arr_count; $i++){ ?>
                <tr><td><?= $arr[$i]; ?></td></tr>
                <?php 
                if($i === $p * 5 - 1){
                    break;
                }         
            } ?>
    </table>

    <p>PAGE LINK :
        <?php for($i = 1; $i <= $max_page; $i++){ ?>
            <a href="getparmetar1.php?page=<?= $i; ?>"><?= $i; ?></a>
            <?php } ?>
    </p>
</body>
</html>
