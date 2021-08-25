<?php
function print_title(){
    if(isset($_GET['id'])) {
        echo htmlspecialchars($_GET['id']);
    }else{
        echo "welcome";
    }
}
function print_description(){
    if (isset($_GET['id'])){
        //basename은 파일의 경로에서 파일명만을 추출해주는 함수로 부모 디렉토리로 접근을 막음
        $basename = basename($_GET['id']);
        echo htmlspecialchars(file_get_contents("data/".$basename));
    }else{
        echo "hello php";
    }
}
function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i<count($list)){
        $title = htmlspecialchars($list[$i]);
        if($list[$i] != '.') {
            if($list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";    
           }
        }
        $i = $i + 1;
    }              
}
?>
