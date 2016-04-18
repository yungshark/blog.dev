"use strict";
(function(){
	var score = 0;
	var record = 0;
	var green = 0;
	var red = 1;
	var yellow = 2;
	var blue = 3;

	var simonArray = [];
	var currentRound = 0;

	function lightItUp(colorId){
		var quadrant = $('[data-id="' + colorId + '"]');
		quadrant.css('opacity', '1');
		setTimeout(function(){
			quadrant.css('opacity', '.4');
		}, 500);
	};
	function randNum(){
		return Math.floor(Math.random()*4);
	}
	function newRound(){
		var random = randNum();
		simonArray.push(random.toString());
		if (random == 0)
			{console.log("green!");
			$('#title').css('color', 'lightgreen')}
		else if (random == 1)
			{console.log("red!");
			$('#title').css('color', 'lightcoral')}
		else if (random == 2)
			{console.log("yellow!");
			$('#title').css('color', 'lightgoldenrodyellow')}
		else if (random == 3)
			{console.log("blue!");
			$('#title').css('color', 'lightblue')}
		roundNum();
	}
	function playSimon(){
		newRound();
		var i = 0;
		var intervalId = setInterval(function(){
			lightItUp(simonArray[i]);
			i++;
		if (i == simonArray.length) {
			clearInterval(intervalId);
		}
		}, 600);
	}
	function compareValue(color){
		console.log(simonArray);
		var userInput = $(color).data('id');
		if (userInput == simonArray[currentRound]){
			currentRound++
		} else {
			currentRound = 0;
			simonArray = [];
			alert("You failed!")
		}

		if (currentRound == simonArray.length){
			currentRound = 0;
			setTimeout(playSimon, 1000);
		}
	}
	function roundNum(){
		$('#round').html(simonArray.length);
	}
	function record(){
		$('#record').html(record);
	}
	function onStartClick(){
		playSimon();
		$(this).text("Reset");
		$(this).off('click');
		$(this).click(onResetClick);
		
	}
	function onResetClick(){
		currentRound = 0;
		simonArray = [];
		record = 0;
		// record();
		$(this).text("Begin");
		$(this).off('click');
		$(this).click(onStartClick);
	}

$('.green').click(function() {
	lightItUp($(this).data('id'));
	compareValue(this);
});

$('.red').click(function() {
	lightItUp($(this).data('id'));
	compareValue(this);
});

$('.yellow').click(function() {
	lightItUp($(this).data('id'));
	compareValue(this);
});

$('.blue').click(function() {
	lightItUp($(this).data('id'));
	compareValue(this);
});

$('#start').on('click', onStartClick);

}());