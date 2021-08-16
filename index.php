<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href = "index.php?id=HTML">HTML</a></li>
            <li><a href = "index.php?id=CSS">CSS</a></li>
            <li><a href = "index.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
                echo $_GET['id'];
            ?>
        </h2>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Perspiciatis repellat explicabo officiis quo. 
        Iste minus illum amet! Commodi nostrum omnis culpa architecto 
        consequuntur vero numquam natus. 
        Omnis eum debitis non.
    </body>
</html>