$(document).ready(function() {

    $('#start').click(function() {
        $(this).before('<img id="explosion" src="../images/explosion.gif" />');
        setTimeout(function() {
            $('#explosion').hide();
        },800);
        $(this).fadeOut();    
    });
    
});