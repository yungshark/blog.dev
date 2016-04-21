
$(document).ready(function(){
	var hole;
	var score;
	var highScore = 0;
	var timer;
	var score;
	var gameLoop;
	var moleTimeOut;

	$('#start').click(function(){
		startGame();
	});
	$('.hole').click(function(){
		console.log(this);
		if ($(this).hasClass('active')){
			score++;
			$('#currentscore').html('Current score: ' + score)
			$(this).removeClass('active')
		}
	})

	function findHole(){
		hole = Math.floor(Math.random() * 9);
		animateHole(hole);	
	};

	function animateHole(hole) {
		$("#" + hole).addClass('active');
		moleTimeOut = setTimeout(function(){
			$("#" + hole).removeClass('active');
			console.log(hole);
		}, 1000);
		
	};


	function countdown(){
		var timeInt = setInterval(function(){
			timer--;
			$("#timer").html(timer);
			if(timer == 0){
				clearInterval(timeInt);
				endGame();
				$('.active').removeClass('active');
			}
			
		}, 1000)
		
	}


	function endGame(){
		clearInterval(gameLoop);
		clearTimeout(moleTimeOut);
		
		if (score > highScore) {
			highScore = score;
			$('#highscore').html('High Score: ' + highScore);
		};
		score = 0;
		timer = 30;
		$("#timer").html(timer);
		var ask = confirm("Play again?");
		if(ask == true){
			startGame();
		}
	};

	function startGame() {
		timer = 30;
		countdown();
		score = 0;
		gameLoop = setInterval(findHole, 1002);
	};


})