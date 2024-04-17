<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR flag</title>
</head>
<body>
    
    <?php
        // 이중 반복문 점찍기 짝수일때 검정 플래그. 홀수일때 검정플래그 5까지 반복 ● ○

        $flag = false; //defualt 
        for($i = 1; $i <= 4; $i++){
            for($j = 1; $j <= 5; $j++){
                if($flag === true){
                    echo '●';
                    $flag = false;  
                } else {
                    echo '○';
                    $flag = true;
                }
            }
            echo '<br>';
        } 

    ?>

</body>
</html>