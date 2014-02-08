$(document).ready(function(){
    animateIMG();
    
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h = $(window).height() - 50;
    var w = $(window).width() - 50;
    
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);
    
    return [nh,nw];    
    
}

function animateIMG(){
    var newq = makeNewPosition();
    $('#winner').animate({ top: newq[0], left: newq[1] }, function(){
      animateIMG();        
    });
 
    rotate($('#winner'), -75);   
    /*
    $("#winner").rotate({
        duration: 200,
        angle: -75,
        animateTo:75
    });*/
    
}

function rotate(object, degrees) {
    object.css({
  '-webkit-transform' : 'rotate('+degrees+'deg)',
     '-moz-transform' : 'rotate('+degrees+'deg)',  
      '-ms-transform' : 'rotate('+degrees+'deg)',  
       '-o-transform' : 'rotate('+degrees+'deg)',  
          'transform' : 'rotate('+degrees+'deg)',  
               'zoom' : 1

    });
}