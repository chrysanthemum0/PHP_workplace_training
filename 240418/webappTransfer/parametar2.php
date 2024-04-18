<?php

    require_once "tax.php";

    switch ($_POST['item']) {
        case 1:
            $name = "Apple";
            $price = 1;
            break;
        
        case 2:
            $name = "Orange";
            $price = 2;
            break;

        case 3:
            $name = "Graphe";
            $price = 3;
            break;

        case 4:
            $name = "Banana";
            $price = 1.5;
            break;

        default:
            break;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parmetar</title>
</head>
<body>
    <p>Your Product : <?= $name; ?></p>
    <p>Not Include Tax Price : <?= $price .'$'; ?></p>
    <p>Include Tax Price : <?= includeTax($price) .'$'; ?></p>
</body>
</html>
