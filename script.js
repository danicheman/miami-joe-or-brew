/*
 *
 * Javascript file of a game
 * 
 */

window.game = (window.game || {});

game.test = function() {
	alert('js is working');
}

game.question_index = 0;

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
	answer_data.question_index = 1;
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
	e.preventDefault();
	var answer = $(this).parents('section').attr('id');
	var answer_data = {};
	answer_data.answer = answer;
	answer_data.type = "answer";
	answer_data.question_index = game.question_index;

	game.sendAnswer(answer_data);
}

game.questionReceived = function (question) {
	var question_text = question.q;
	game.question_index = question.question_index;
	$('#question_text').html(question_text);
	$('#question_hint').html(game.randomQuestionHint());
}

$(document).ready(function() {
	var startButton = $('.start');
	var answerButtons = $('.answer');

	startButton.on('click', game.startGame);
	answerButtons.on('click', game.answerClicked);

	//game.test();

});
