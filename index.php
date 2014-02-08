<?php

      
$js_include = '';
if(!empty($_GET['page']) && in_array($_GET['page'],['start','win', 'lose','game'])) {
    
    if($_GET['page'] != 'game')include('/views/layout.php');    
    include('views/'.$_GET['page'].'.php');
}else {
    include('views/layout.php');    
    include('views/start.php');
}

?>
