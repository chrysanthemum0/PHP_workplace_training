<?php

error_reporting(E_CORE_WARNING);

$c_menu_item = '';

$list = array(
    'melon'=> 'Melon',
    'lemon'=> 'Lemon',
    'apple'=> 'Apple'
);

if(isset($_POST['menu']) === true){
    $menu_item = $_POST['menu'];
    if(array_key_exists($menu_item, $list)){
        $c_menu_item = $menu_item;
    } else {
        $error = '不適切な入力です。';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フィルター</title>
</head>
<body>
    <form action="security3.php" method="post" >
        <p>SELECT MENU</p>
        <select name="menu">
            <option value="melon">Melon</option>
            <option value="lemon">Lemon</option>
            <option value="apple">Apple</option>
        </select>
        <p><input type="submit" value="送信"></p>
    </form>

    <?php if($c_menu_item !== '') { ?>
      <p>select meun is <?= $c_menu_item ?></p>  
    <?php } else { ?>
    <p><?= $error ?></p>
    <?php } ?>
</body>
</html>
