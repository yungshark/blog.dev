<!doctype html>
<html>
<head>
	<title>Simple Simon</title>
	<link rel="stylesheet" href="css/simon.css">

</head>
<body>
		<center>	
			<h1 id="title">Simple Simon</h1>
	<br>
	<div class ="game-info">
		<h2>Round: <span id="round">0</span></h2>
	<button id="start">Begin</button>
	<!-- <p class="lose">Man, you lasted <span id="round"></span> rounds!</p> -->
	<!-- <p class="record">You're record is <span id="record"></span>!</p> -->
	</div>
	<br>
	<main>
		
		
			<div 	class="tile green" 	data-id="0"></div>
			<div   	class="tile red"	data-id="1"></div>
			<div  	class="tile yellow"	data-id="2"></div>
			<div  	class="tile blue"	data-id="3"></div>

		
	</main>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/simon.js"></script>
</body>
</html>