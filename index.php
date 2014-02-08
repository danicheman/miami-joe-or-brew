<?php

$js_include = '';
      
if(!empty($_GET['page']) && in_array($_GET['page'],['start','win', 'lose','game'])) {

    if($_GET['page']=='win') {
        
        $js_include = '<script src="dist/js/win.js"></script>';
        $jumbotron_message = '<p>Congratulations! You win!</p>
        <a href="?page=game" class="btn btn-lg btn-success" href="#" role="button">Play again!</a>
        <p style="margin-top:30px"><audio controls autoplay>
        <source src="audio/pbj.mp3" type="audio/mpeg">
    </audio></p>';
    } elseif($_GET['page']=='lose') {
        $jumbotron_message = '<p>Sorry, you don\'t know your coffees from your beer cans </p>
        <a href="?page=game" class="btn btn-lg btn-success" href="#" role="button">Play again!</a>';
    }
    if($_GET['page'] != 'game')include('/views/layout.php');    
    include('views/'.$_GET['page'].'.php');
}else {
    include('views/layout.php');    
    include('views/start.php');
}

