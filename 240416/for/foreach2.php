<?php

    $arr = array('lemon' => 100, 'apple' => 80, 'mango' => 500);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach2</title>
</head>
<body>
    
    <?php
        foreach ($arr as $key => $value){ ?>
            <p><?= $key . " : " . $value; ?></p>
        <?php } ?>

</body>
</html>