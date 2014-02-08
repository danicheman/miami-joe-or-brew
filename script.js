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

game.sendAnswer = function(answer_data) {
	var query = $.param(answer_data);
	$.post( "/api.php", query, function( data ) {
		game.questionReceived(data);
	});

}

game.startGame = function() {
	$.post( "/api.php","type=start", function( data ) {
		alert(data);
		game.questionReceived(data);
	});
	//todo: now change the dom to start the game and get a question
}

game.answerClicked = function(e) {
	var answer = $(this).attr('id');
	var answer_data = {};
	answer_data.answer = answer;
	answer_data.type = "answer";

	game.sendAnswer(answer_data);
}

game.questionReceived = function (question) {
	var question_text = question.q;
	var question_index = question.index;
	$('#question_text').html(question_text);
	$('#question_hint').html(game.randomQuestionHint());
	alert(data);

}

$(document).ready(function() {
	var startButton = $('.start');
	var answerButtons = $('.answer');

	startButton.on('click', game.startGame);
	answerButtons.on('click', game.answerClicked);

	//game.test();

});
