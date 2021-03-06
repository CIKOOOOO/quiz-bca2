<!DOCTYPE html>
<html>
<head>
	<link rel="shrotcut icon" type="image/x-icon" href="res/favicon.ico" />
	<title>Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>. -->
	<link rel="stylesheet" href="/css/style.css">
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
	<div id="gone">
		<input type="text" id="quest1">
		<input type="text" id="quest2">
		<input type="text" id="quest3">
		<input type="text" id="quest4">
		<input type="text" id="quest5">
	</div>
	
	<!-- screen1 -->
	<div id="bodycontainer1">
		<div class="container1">
			<h1>Kuis <br>COP DPD</h1>
			<img src="res/logo.png" alt="BCA Logo" width="100px" height="100px">
			<div class="nickbox">
				<input type="text" id="inputNickname" placeholder="masukan id" name="nickname" required> <br>
			</div>
			<button id="btn" onclick="submitClick()">submit</button>
			<button id="btn_total" onclick="showTotalScore()">show total score</button>
		</div>

		<div id="lds-ring"><div></div><div></div><div></div><div></div></div>
	</div>
	
	<!-- screen 2 -->
	<div id="bodycontainer2">
		<div class="container2">
			<progress value="0" max="45" id="progressBar"></progress>
			<div class="box">
				<div class="question">Kapan fitur GO-PAY diluncurkan?</div> 
	
				<div class="ansrow-1">
					 <input id="ans-1" type="radio" name="question1" value="a">
					 <label for="ans-1">2011</label><br>
					 <input id="ans-2" type="radio" name="question1" value="b">
					 <label for="ans-2">2015</label><br>
				</div>
				<div class="ansrow-2">
					 <input id="ans-3" type="radio" name="question1" value="c" onclick="clicked1()">
					 <label for="ans-3">2016</label> <br>
					 <input id="ans-4" type="radio" name="question1" value="d">   
					 <label for="ans-4">2017</label> <br>
				</div>
			</div>
	
			<div class="box">
				<div class="question">Apa bentuk logo BCA?</div> 
		
				<div class="ansrow-1">
					<input id="ans-5" type="radio" name="question2" value="a">
					<label for="ans-5">Jengkol</label> <br>
					<input id="ans-6" type="radio" name="question2" value="b" >
					<label for="ans-6">Gandum</label>
				</div>
				<div class="ansrow-2">
					<input id="ans-7" type="radio" name="question2" value="c" >
					<label for="ans-7">Padi</label> <br>
					<input id="ans-8" type="radio" name="question2" value="d" onclick="clicked2()">
					<label for="ans-8">Cengkeh </label>
				</div>
			</div>
			<div class="box">
				<div class="question">Negara mana yang merupakan daerah ekspansi Go-Jek?</div> 
	
				<div class="ansrow-1">
					<input id="ans-9" type="radio" name="question3" value="a">
					<label for="ans-9">Laos</label> <br>
					<input id="ans-10" type="radio" name="question3" value="b" >
					<label for="ans-10">Timor Leste</label>
			   </div>
			   <div class="ansrow-2">
					<input id="ans-11" type="radio" name="question3" value="c">
					<label for="ans-11">Malaysia</label> <br>
					<input id="ans-12" type="radio" name="question3" value="d" onclick="clicked3()">
					<label for="ans-12">Thailand </label>
			   </div>
			</div>
			<div class="box">
				<div class="question">Berikut ini adalah nama partner cobranding produk kartu kredit BCA saat ini, kecuali :</div> 
	
				<div class="ansrow-1">
					<input id="ans-13" type="radio" name="question4" value="a">
					<label for="ans-13">Singapore<br>Airline</label> <br>
					<input id="ans-14" type="radio" name="question4" value="b">
					<label for="ans-14">Indomaret</label>
				</div>
				<div class="ansrow-2">
					<input id="ans-15" type="radio" name="question4" value="c">
					<label for="ans-15">Bank Woori<br>Saudara</label> <br>
					<input id="ans-16" type="radio" name="question4" value="d" onclick="clicked4()">						
					<label for="ans-16">Carrefour</label>
				</div>
			</div>
			<div class="box">
			<div class="question">Berikut ini yang mana bukan merupakan bagian dari Gojek Ecosystem?</div> 
	
			<div class="ansrow-1">
				<input id="ans-17" type="radio" name="question5" value="a" onclick="clicked5()">
				<label for="ans-17">Admin</label> <br>
				<input id="ans-18" type="radio" name="question5" value="b">
				<label for="ans-18">Talent</label>
			</div>
			<div class="ansrow-2">
				<input id="ans-19" type="radio" name="question5" value="c">
				<label for="ans-19">User</label> <br>
				<input id="ans-20" type="radio" name="question5" value="d">
				<label for="ans-20">Merchant</label>
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
	
			<div id="tf">
				<div class="tf1">
						1. <span id="p1"></span><br>
						2. <span id="p2"></span><br>
						3. <span id="p3"></span><br>
						4. <span id="p4"></span><br>
						5. <span id="p5"></span><br><br>
						6. <span id="p6"></span><br>
						7. <span id="p7"></span><br>
						8. <span id="p8"></span><br>
						9. <span id="p9"></span><br>
						10. <span id="p10"></span>
				</div>
				<div class="tf2">
						11. <span id="p11"></span><br>
						12. <span id="p12"></span><br>
						13. <span id="p13"></span><br>
						14. <span id="p14"></span><br>
						15. <span id="p15"></span><br><br>
						16. <span id="p16"></span><br>
						17. <span id="p17"></span><br>
						18. <span id="p18"></span><br>
						19. <span id="p19"></span><br>
						20. <span id="p20"></span>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
