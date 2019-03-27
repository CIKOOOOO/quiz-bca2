function submitClick(){
	var firebaseRef = firebase.database();
	var inputNickname = document.getElementById("inputNickname").value;
	var checkNick = firebase.database().ref("users");

	checkNick.once("value")
	.then(function(snapshot){
		if(snapshot.hasChild(inputNickname)){
			firebase.database().ref(`users/${inputNickname}/`).once("value", snapshot => {
				if (snapshot.child("quiz3").val() != 0 || snapshot.child("quiz4").val() != 0){
					window.alert("Cannot enter the game");
				 }
				 else{
					trueCond();
				 }
			 });
		}
		else{
			firebaseRef.ref('users/'+inputNickname).set({
				quiz1 : 0,
				quiz2 : 0,
				quiz3 : 0,
				quiz4 : 0,
				quiz5 : 0,
				quiz6 : 0,
				quiz7 : 0,
				quiz8 : 0,
				total_score : 0
			},function(error){
				if(error){
					window.alert("Error");
				}
				else{
					trueCond();
				}
			});
		}
	});	
}

function trueCond(){
	document.getElementById("bodycontainer1").style.display = "none";
	document.getElementById("bodycontainer3").style.display = "none";
	document.getElementById("bodycontainer2").style.display = "block";

	var timeleft = 15;
	var downloadTimer = setInterval(function(){
		document.getElementById("progressBar").value = 15 - timeleft;
		timeleft -= 1;
		if(timeleft == -2){
			submitData();
			clearInterval(downloadTimer);
		}
			
	}, 1000);
}

function getValue(){
	var ans1 = 0,ans2 = 0;
	if(document.getElementById('ans-3').checked){
		ans1 += 20;
	}
	else ans1 += 5;

	if(document.getElementById('ans-8').checked){
		ans2 += 20;
	}
	else ans2 += 5;

	updateData(ans1,ans2);
}

function updateData(q1, q2) {
	const fb = firebase.database().ref();
	var data = {quiz3:q1,quiz4:q2};
	fb.child('users/'+document.getElementById("inputNickname").value).update(data);
}

function submitData(){
	getValue();
	document.getElementById("bodycontainer1").style.display = "none";
	document.getElementById("bodycontainer3").style.display = "block";
	document.getElementById("bodycontainer2").style.display = "none";
	document.getElementById("nickname").innerHTML = document.getElementById("inputNickname").value;

	firebase.database()
	.ref(`users/${document.getElementById("inputNickname").value}/`)
	.once("value", snapshot => {
		var quiz1 = snapshot.child("quiz1").val();
		var quiz2 = snapshot.child("quiz2").val();
		var quiz3 = snapshot.child("quiz3").val();
		var quiz4 = snapshot.child("quiz4").val();
		document.getElementById("p1").innerHTML = quiz1;
		document.getElementById("p2").innerHTML = quiz2;
		document.getElementById("p3").innerHTML = quiz3;
		document.getElementById("p4").innerHTML = quiz4;
		var total_point = parseInt(quiz1) + parseInt(quiz3) 
		+ parseInt(quiz2) + parseInt(quiz4);
		document.getElementById("score").innerHTML = total_point;
		totalscore(total_point);
	});
}

function totalscore(score) {
	const fb = firebase.database().ref();
	var data = {total_score:score};
	pushTotalScore(score);
	fb.child('users/'+document.getElementById("inputNickname").value).update(data);
}

function pushTotalScore(score){
	var firebaseRef = firebase.database().ref('leaderboard/'+document.getElementById("inputNickname").value);
	firebaseRef.set({
		total_score : score
	});
}
