<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Whack-a-Pony!</title>
	<script src="js/jquery.min.js"></script>
	<!-- <script src="js/whack.js"></script> -->
	<script>
	$('document').ready(function() {

		var moleImage = ['url(../images/twi7.png) no-repeat center', 'url(../images/twi6.png) no-repeat center', 'url(../images/twi3.png) no-repeat center', 'url(../images/pin1.png) no-repeat center', 'url(../images/pin2.png) no-repeat center', 'url(../images/pin3.png) no-repeat center', 'url(../images/rar1.png) no-repeat center', 'url(../images/rar2.png) no-repeat center', 'url(../images/rar3.png) no-repeat center', 'url(../images/flu1.png) no-repeat center', 'url(../images/flu2.png) no-repeat center', 'url(../images/flu3.png) no-repeat center', 'url(../images/aj1.png) no-repeat center', 'url(../images/aj2.png) no-repeat center', 'url(../images/aj4.png) no-repeat center', 'url(../images/rd1.png) no-repeat center', 'url(../images/rd2.png) no-repeat center',  'url(../images/rd3.png) no-repeat center'];

		var score = 0;


		var twilight = new Audio('/sounds/hateme.mp3');
		var fluttershy = new Audio('/sounds/startled.mp3');
		var pinkie = new Audio('/sounds/locococo.mp3');
		var rarity = new Audio('/sounds/hooves.mp3');
		var rainbow = new Audio('/sounds/leavealone.mp3');
		var applejack = new Audio('/sounds/tarnation.mp3');



		setInterval(function() {
			var mole = "#mole" + Math.floor((Math.random() * 9));

			var randImage = moleImage[Math.floor((Math.random() * 17))];

			console.log(mole);

			$(mole).css('background', randImage);
			// $(mole).css('background', 'url(../images/twi3.png) no-repeat center');
			// $(mole).addClass('classname');
			// $(mole).css('background-color', '#000');


			$(mole).click(function() {
				score += 10;
				twilight.play();
				
				console.log(score);

				console.log(randImage);



				


			


				// else if(randImage == moleImage[4] || moleImage[5] || moleImage[6]) {

				// 	pinkie.play();
			
				// } 

				// else if(randImage == moleImage[7] || moleImage[8] || moleImage[9]) {

				// 	rarity.play();

				// } else if(randImage == moleImage[10] || moleImage[11] || moleImage[12]) {

				// 	fluttershy.play();

				// } else if(randImage == moleImage[13] || moleImage[14] || moleImage[15]) {

				// 	applejack.play();

				// } else if(randImage == moleImage[16] || moleImage[17] || moleImage[18]) {

				// 	rainbow.play();

				// }

				var scoreCounter = $('#scoreCount').html(score);

				// varName.innerHTML=score;
			});
				
		
			setTimeout(function() {
				$(mole).css('background', '');
				$('.mole').off();
				// twilight.stop();

			}, 1000);

		}, 2000);

		});



	</script>
	<style type="text/css">

body {
	background-image: url("images/equestria_nights.png");
}

#header {
	text-align: center;

}

#score {
	margin-top: 80px;
	margin-right: 15px;
	float: right;
	color: #FFF;
	text-align: center;
	font-size: 200%;
}


#container {
/*	border: 1px solid #000;*/
	height: 685px;
	width: 685px;
	margin: auto;
	margin-top: 200px;
	}

#mole0 {
/*	border: 1px solid #000;*/
	border-color: #000;
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-top: 10px;
	margin-left: 10px;
	color: #FFF;
	float: left
}

#mole1 {
/*	border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	margin-top: 10px;
	margin-bottom: 10px;
	color: #FFF;
	float: left;
}

#mole2 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	margin-top: 10px;
	color: #FFF;
	float: left;
}

#mole3 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	margin-bottom: 10px;
	color: #FFF;
	clear: left;
	float: left;
}

#mole4 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	color: #FFF;
	float: left;
}

#mole5 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	margin-bottom: 10px;
	color: #FFF;
	float: left;
}

#mole6 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	margin-bottom: 10px;
	color: #FFF;
	clear: left;
	float: left;
}

#mole7 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	color: #FFF;
	float: left;
}

#mole8 {
	/*border: 1px solid #000;*/
	height: 200px;
	width: 200px;
	padding: 5px;
	margin-left: 10px;
	margin-bottom: 10px;
	color: #FFF;
	float: left;
}
	</style>
</head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->

<body>

	<div id="score">

		<img src="../images/score4.png">
		<h1 id="scoreCount">0</h1>

	</div>

<div id="container">

		<div id="mole0" class="mole">

		</div>

		<div id="mole1" class="mole">
		
		</div>

		<div id="mole2" class="mole">
	
		</div>

		<div id="mole3" class="mole">
		
		</div>

		<div id="mole4" class="mole">
			
		</div>

		<div id="mole5" class="mole">
			
		</div>

		<div id="mole6" class="mole">

		</div>	

		<div id="mole7" class="mole">
		</div>

		<div id="mole8" class="mole">
		</div>	

	</div>


<!-- 	<div class="container">
		<div class="row">
			
				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

		</div>

		<div class="row">
			
				<div class="col-md-3">
					<div class="mole" id="whack">
					</div>
				</div>

				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

		</div>

		<div class="row">
			
				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

				<div class="col-md-3">
					<div class="mole">
					</div>
				</div>

		</div>

	</div> -->
	
</body>
</html>