/*
 *
 * Javascript file of a game
 * 
 */

window.game = (window.game || {});

game.test = function() {
	alert('js is working');
}

game.sendAnswer = function() {
	$.post( "/api.php","string=test", function( data ) {
		alert(data);
	});
}

game.questionReceived = function (question) {

}

$(document).ready(function() {

	//game.test();

});
