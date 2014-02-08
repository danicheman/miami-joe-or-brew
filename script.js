/*
 *
 * Javascript file of a game
 * 
 */

window.game = (window.game || {});

game.test = function() {

}

game.sendAnswer = function() {

	$.post( "/api.php","string_data", function( data ) {
			})

}

game.updateGameUI = function () {

}

game.answerClicked = function () {

}

$(document).ready(
		function() {
			game.test();
			//bind the answer functions to the buttons
		}

);
