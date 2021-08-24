<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])) {?>
            <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a>
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
<?php
require('view/bottom.php');
?>