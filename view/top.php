<?php
require_once('lib/print.php');
//require를 통해 명확하게 print_title()이 어디서 왔는지 명시하고 싶다
//하지만 redeclare라고 오류가 뜬다 이미 index.php의 require('print.php')에서 
//정의가 됐기때문이다 -> php에서는 한번 만들어진 함수는 다시 재정의 할 수 없도록 되어있다.
//이때 require_once를 사용하면 이미 로드된 php파일은 무시한다. 
//중복해서 php파일이 호출되는 것을 방지한다. 가급적이면 require_once를 쓰자.
?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
            print_list();
            ?>
        </ol>
