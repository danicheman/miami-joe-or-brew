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
    else {
        /*$js_include =  ' <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX3fJinq8yzUBt3nut7SEWgObFkvKheFE&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, \'load\', initialize);
    </script>';
   
    }*/
    include('views/'.$_GET['page'].'.php');
}else {
    include('views/layout.php');    
    include('views/start.php');
}

