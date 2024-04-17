<?php

    $arr = [10, 20, 30, 40, 50, 800, 100, 110];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>

    <?php
        foreach($arr as $value) { ?>   
            <p><?= $value; ?></p>
        <?php } ?>
        
</body>
</html>