/*
 *
 * Javascript file of a game
 * 
 */

window.game = (window.game || {});

game.test = function() {
	alert('js is working');
}

game.randomQuestionHint = function () {
	var hints = [
		"Is it a colada or a chelada?",
		"Are they serving beers or ",
		"Are they serving Fosters or Folgers?",
		"Are they serving Coors or Cappuccino?",
		"Miller or Mocha?",

	];

	var item = hints[Math.floor(Math.random()*hints.length)];
	return item;
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
		//game.questionReceived(data);
	});
	//todo: now change the dom to start the game and get a question
}

game.answerClicked = function(e) {

	game.sendAnswer();
}

game.questionReceived = function (question) {
	var question_text = question.q;
	var question_index = question.index;
	$('#question_text').html(question_text);
	$('#question_hint').html(game.randomQuestionHint());

}

$(document).ready(function() {
	var startButton = $('.start');
	var answerButtons = $('.send');

	startButton.on('click', game.startGame);
	answerButtons.on('click', game.answerClicked);

	//game.test();

});
