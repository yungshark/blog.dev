
(function(){
	var hole;
	var score;
	var highScore = 0;
	var timer;
	var finalScore;

	$('#start').click(function(){
		startGame();
	});

	function findHole(){
		hole = Math.floor(Math.random() * 9);
		animateHole(hole);
		
	}

	function animateHole(hole) {
		var holeId = $('#' + hole);
		setTimeout(function(){
			$(holeId).addClass('active');
			addListener(holeId);
		}, 1000);
		moleMiss(hole);
		
	};

	function moleMiss(hole) {
		var holeId = $('#' + hole);
		setTimeout(function() {
			$(holeId).removeClass('active');
			removeListener(hole);
		}, 1000);
	};

	function countdown(){
		var timeInt = setInterval(function(){
			timer--;
			if(timer == 0){
				clearInterval(timeInt);
				var ask = confirm("Play again?");
				if(ask == true){
					startGame();
				}else{
					endGame();
				}
			}
			animateHole(hole);
		}, 1000)
	}

	function addListener(hole) {
		document.getElementById(hole).addEventListener('click', moleWhack);
	};

	function removeListener(hole){
		document.getElementById(hole).removeEventListener('click', moleWhack);
	};

	function moleWhack(){
		var holeId = $('#' + hole);
		$(holeId).removeClass('active');
		removeListener(hole);
		recordScore();
		$("#timer").html(timer);
	};

	function recordScore(){
		score++;
		$('#currentscore').html('Current score: ' + score);
		if (timer == 0) {
		 score = finalScore;	
		};
	};

	function endGame(){
		clearTimeout(hole);
		if (highScore > finalScore) {
			highScore = score;
			$('#highscore').html('High Score: ' + highScore);
		};
		timer == 30;
		$("#timer").html(timer);

		if ($('#' + hole).hasClass('active')) {
			$(this).removeClass('active');
			removeListener(this);
		};

	};

	function startGame() {
		countdown();
		score = 0;
		timer = 30;
		$("#timer").html(timer);
		$('#currentscore').text('Current score: ' + score);
		$('#' + hole).removeClass('active');
		setInterval(findHole, 1000);
	};


})();