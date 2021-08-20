<?php
function print_title(){
    if(isset($_GET['id'])) {
        echo $_GET['id'];
    }else{
        echo "welcome";
    }
}
function print_description(){
    if (isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    }else{
        echo "hello php";
    }
}
function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i<count($list)){
        if($list[$i] != '.') {
            if($list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";    
           }
        }
        $i = $i + 1;
    }              
}
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
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])) {?>
            <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
            <!--업데이트를 클릭했을때 우리가 수정을 하려면 수정하려고 하는 내용이 무엇인지를 알아야한다 
        그래서 현재 우리가 보고 있는 페이지에 대한 id값을 물고 들어가야한다-->
        <?php } ?>
        <h2>
            <?php
            print_title();
            ?>
        </h2>
        <?php
        print_description();
        ?>
        <form action = "update_process.php" method="post">
            <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
            <!--사용자에게는 노출하지않으면서 submit을 눌렀을때 액션이 가리키는
             애플리케이션으로 데이터를 전송하고 싶을때 hidden
            그리고 php echo를 쓸때 "="로 대체할 수 있다 -->
            <p>
                <input type = "text" name="title" placeholder="Title" value="<?php print_title(); ?>">
            </p>
            <p>
                <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>        
    </body>
</html>