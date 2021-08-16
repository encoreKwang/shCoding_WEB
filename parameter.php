<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <!--php의 입력값을 url로 주기-->
        안녕하세요 <?php echo $_GET['address']; ?>에 사시는 
        <?php echo $_GET['name'];
        ?>님
    </body>
</html>