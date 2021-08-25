<?php
unlink('data/'.basename($_POST['id'])) ;
header('Location: /index.php');
//삭제 기능은 링크(GET방식)로 하면 안되고 POST방식으로 해야한다
//링크로 연결했을뿐인데 데이터가 삭제되기 때문이다
?>