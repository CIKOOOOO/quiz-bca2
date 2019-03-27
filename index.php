<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>. -->
	<link rel="stylesheet" href="style.css">
	<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
		<script>
		  // Initialize Firebase
		  var config = {
		    apiKey: "AIzaSyCspIDJz-M82jCFShayNGfIpXFyrlz9ry4",
		    authDomain: "quizbca.firebaseapp.com",
		    databaseURL: "https://quizbca.firebaseio.com",
		    projectId: "quizbca",
		    storageBucket: "quizbca.appspot.com",
		    messagingSenderId: "110288190354"
		  };
		  firebase.initializeApp(config);
	</script>

	<script src="index.js"></script>
</head>
<body id="body">
	<!-- screen1 -->
	<div id="bodycontainer1">
		<div class="container1">
			<h1>Quiz Bca</h1>
				<!-- <form method="POST" action="main_quiz1.php" onsubmit="return submitClick();">	 -->
					<div class="nickbox">
						<input type="text" id="inputNickname" placeholder="masukan nickname" name="nickname" required> <br>
					</div>
					<button id="btn" onclick="submitClick()">Submit</button>
					<!-- <input id="btn" type="submit" value="submit"> -->
				<!-- </form> -->
				
		</div>
	</div>
	
	<!-- screen 2 -->
	<div id="bodycontainer2">
		<div class="container2">
			<progress value="0" max="15" id="progressBar"></progress>
			<div class="box">
				<img src="bca.png" width="100px" height="100px" alt="qimg">
				<div class="question">Warna logo BCA?</div> 
	
				<div class="ansrow-1">
					 <input id="ans-1" type="radio" name="question1" value="a">  Kelabu <br>
					 <input id="ans-2" type="radio" name="question1" value="b">  Hijau
				</div>
				<div class="ansrow-2">
					 <input id="ans-3" type="radio" name="question1" value="c">  Biru <br>
					 <input id="ans-4" type="radio" name="question1" value="d">  Saya buta warna
				</div>
			</div>
	
			<div class="box">
					<img src="wheel1.png" width="100px" height="100px" alt="qimg">
					<div class="question">Gambar logo Go-Jek?</div> 
		
					<div class="ansrow-1">
						<input id="ans-5" type="radio" name="question2" value="a">Kapal Pesiar<br>
						<input id="ans-6" type="radio" name="question2" value="b">Pesawat
				   </div>
				   <div class="ansrow-2">
						<input id="ans-7" type="radio" name="question2" value="c">Roket<br>
						<input id="ans-8" type="radio" name="question2" value="d">Motor
				   </div>
				</div>
	
				<button class="btn" onclick="submitData()">Submit</button>
		</div>
	</div>

	<!-- screen3 -->
	<div id="bodycontainer3">
		<div class="container3">
			<h2 id="nickname">Nickname</h2>
			<h1>Your Score</h1>
			<div id="score">00</div>
	
			<div class="tf">
				1. <span id="p1"></span><br><br>
				2. <span id="p2"></span><br><br>
				3. <span id="p3"></span><br><br>
				4. <span id="p4"></span>
			</div>
		</div>
	</div>
</body>
</html>