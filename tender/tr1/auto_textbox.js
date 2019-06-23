var val1 = document.getElementById('sub');
val1.addEventListener("click",display);
function display(){
console.log("working");
var val = document.getElementById('task').value;
var request = new XMLHttpRequest();
request.open("GET","auto_textbox.php?num="+val,true);
request.onload = function(){
		document.getElementById("display").innerHTML = request.responseText;
	}
	request.send();
}