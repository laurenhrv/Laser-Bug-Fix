setInterval(function(){
	var square = document.getElementById("square");

	if(involtReceivedPin[7] == 0) {
		square.style.background = "blue";
	} else if(involtReceivedPin[7] == 1){
		square.style.background = "green";
		window.open("http://harveyla.dev.fast.sheridanc.on.ca/slackcURL.php");
	}
},500); 
