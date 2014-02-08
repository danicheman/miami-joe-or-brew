<?php

$js_include = '';
      
if(!empty($_GET['page']) && in_array($_GET['page'],['start','win', 'lose','game'])) {

    if($_GET['page']=='win') {
        $js_include = '<script src="dist/js/win.js"></script>';
        $jumbotron_message = '<p>Congratulations! You win!</p><p>Play Again</p><a href="?page=game" class="btn btn-lg btn-success" href="#" role="button">Play again!</a>';
    } 
    
    if($_GET['page'] != 'game')include('/views/layout.php');    
    include('views/'.$_GET['page'].'.php');
}else {
    include('views/layout.php');    
    include('views/start.php');
}

