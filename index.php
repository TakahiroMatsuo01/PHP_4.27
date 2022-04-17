<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for($i = 1; $i<10; $i++){
        for($j = 1; $j < 10; $j++){
            $result =$i * $j;
            if($result > 40){goto end;}
            print "{$result}&nbsp;";
        }
        print'<br/>';
    }
    end :
    ?>
</body>
</html>