<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <?php
    $coworkers = array('egoing', 'kwang', 'leezche', 'duru');
    echo $coworkers[0].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers, 'taeho');
    var_dump($coworkers);
    ?>
</head>
<body>
    
</body>
</html>