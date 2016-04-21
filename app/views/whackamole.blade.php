
<!doctype html>

<html>
	<head>
		<title>Whack-a-Mole</title>

		<style type="text/css">
			body {
				background-image:url('/img/grass.png');
				vertical-align: text-bottom;
				background-repeat:no-repeat;

			}

			.container {
				position: relative;
				top: 200px;
				width: 306px;
				height: 370px;
				margin: 0 auto;
				text-align: center;
			}
			.infoContainer {
				width: 200px;
				float: left;
			}
			#round {
				text-align: center;
				height: 20px;
			}
			#newGame {
				margin-top: 10px;
			}
			.hole {
				height: 100px;
				width: 100px;
				float: left;
				background-image:url('/img/hole.png');
				background-repeat:no-repeat;
				background-size:100px 100px;
				border: 1px solid black;
			}
			.active {
				background-image:url('/img/moley.png');
				background-repeat:no-repeat;
				background-size:100px 100px;
			}
		</style>
	</head>
	<body>
		<center>
		<div class='container' align="center">
			<div id='0' class='hole'></div>
			<div id='1' class='hole'></div>
			<div id='2' class='hole'></div>
			<div id='3' class='hole'></div>
			<div id='4' class='hole'></div>
			<div id='5' class='hole'></div>
			<div id='6' class='hole'></div>
			<div id='7' class='hole'></div>
			<div id='8' class='hole'></div>

			<div class='infoContainer'>
				<div id='currentscore'>Current score:</div>
				<div id='highscore'>High Score:</div>
				<div id='timer'>30</div>
				<button id='start'>New Game</button>
			</div>
		</div>


		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/whackamole.js"></script>
	</center>
	</body>
</html>