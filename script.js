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
game.current_answer = "";

game.randomQuestionHint = function () {
	var hints = [
		"Is it a colada or a chelada?",
		"Are they serving beers or beans?",
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
	}, 'json');

}

game.startGame = function() {
	$.post( "/api.php","type=start", function( data ) {
		game.questionReceived(data);

	} ,'json');
}

game.answerClicked = function(e) {
	e.preventDefault();
	var answer = $(this).parents('section').attr('id');
	var answer_data = {};
	answer_data.answer = answer;
	answer_data.type = "answer";
	answer_data.question_index = game.question_index;

	if (game.current_answer == answer) {
		game.indicateSuccess(answer);
	}
	else {
		game.indicateFailure(answer);
        game.zombieAttack();
	}

	game.sendAnswer(answer_data);
}

game.questionReceived = function (question) {
	if (question.wrong >= 3 ) {
		game.finish(false);
		return;
	}

	if (question.finished) {
		game.finish(true);
		return;
	}

	var question_text = question.q;
	game.question_index = question.question_index;
	game.current_answer = question.a;
	$('#question_text').html(question_text);
	$('#question_hint').html(game.randomQuestionHint());

    game.updateScore(question.correct);
    game.updateLives(question.wrong);

	//update map
	//initialize(question.lat, question.lng);
	movePoint(question.lat, question.lng);
}

game.indicateSuccess = function(beverage_type) {
	highlightAnswer(beverage_type, "lime");
}

game.indicateFailure = function(beverage_type) {
	highlightAnswer(beverage_type, "red");
}

game.updateScore = function(correct) {
    $('#score_correct').text(parseInt(correct) * 10);
}

game.updateLives = function(remains) {
    $('#score_lives').text(remains + '/3');
}

game.zombieAttack = function() {
    var zombie_offset = parseInt( $('#zombie').attr('class').replace(/col-md-1 col-md-offset-/, ''));
    var elephant_offset = parseInt( $('#elephant').attr('class').replace(/col-md-1 col-md-offset-/, ''));

    zombie_offset += 2;
    elephant_offset -= 2;

    $('#zombie').attr('class', 'col-md-1 col-md-offset-' + zombie_offset);
    $('#elephant').attr('class', 'col-md-1 col-md-offset-' + elephant_offset);
}

game.finish = function (hasWon) {
	if (hasWon) {
		window.location = '/?page=win';
	}
	else {
        $('#elephant img').attr('src', 'http://brewvsbrew.azurewebsites.net/images/bacon.png');

        setTimeout(function() {
            window.location = '/?page=lose';
        }, 2000);
	}
}

$(document).ready(function() {
	var startButton = $('.start');
	var answerButtons = $('.answer');

	startButton.on('click', game.startGame);
	answerButtons.on('click', game.answerClicked);

	//game.test();

});
