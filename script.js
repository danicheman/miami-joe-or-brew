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
	$.post( "/api.php","type=answer&answer=coffee&question_index=2", function( data ) {
		//just posted an answer, should get question now
		//todo: take the question and update the dom
		game.questionReceived(data);
	});

}

game.startGame = function() {
	$.post( "/api.php","type=start", function( data ) {
		alert(data);
	});
	//todo: now change the dom to start the game and get a question
}

game.questionReceived = function (question) {
	//todo: update the question area

}

$(document).ready(function() {
	var startButton = $('.jumbotron');
	var answerButtons = $('.active');

	startButton.on('click', game.startGame);
	answerButtons.on('click', game.sendAnswer);

	//game.test();

});
