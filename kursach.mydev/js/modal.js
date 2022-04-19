document.getElementById('bgmodal').onclick = function (e) {
	if(e.target.id != 'bgmodal') return;
	close();
}

function show() {
	document.getElementById('bgmodal').style.display = "block";
}

document.getElementById('open').onclick = function(){
	show();
}

function close() {
	document.getElementById('bgmodal').style.display = "none";
}

document.getElementById('close').onclick = function(){
	close();
}