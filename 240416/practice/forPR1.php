<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for PR 1</title>
</head>
<body>
    
    <?php
        //2의 배수 구하기 문제 예} 2 4 6 8 ... 
        for($i = 1; $i <= 20; $i++){
            if(($i % 2) === 0){
                echo $i . "<br>";
            }
        }
    ?>

</body>
</html>