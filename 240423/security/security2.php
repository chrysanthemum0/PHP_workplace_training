<?php

if(isset($_POST['menu']) === true){
    $menu_item = $_POST['menu'];
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INOUT FILE</title>
</head>
<body>
    <form action="security2.php" method="post" >
        <p>Select Menu</p>
        <select name="menu">
            <option value="melon">Melon</option>
            <option value="lemon">Lemon</option>
            <option value="apple">Apple</option>
        </select>

        <p><input type="submit" value="送信"></p>
    </form>
    <?php if(isset($menu_item) === true) { ?>
        <p>selcet menu is <?= $menu_item; ?></p>
    <?php } ?>
</body>
</html>


