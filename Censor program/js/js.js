var textArea = document.getElementById('text');
textArea.onkeyup = func;
function func(e) {
	if (e.keyCode == 32) {
		var contentArr = textArea.value.split(' ');
		for(var i = 0; i < contentArr.length; i++) {
			if(contentArr[i] == 'fuck'){
				contentArr[i] = 'f**k';
				textArea.value = contentArr.join(' ');
			}
			else if (contentArr[i] == 'idiot'){
				contentArr[i] = 'id**t';
				textArea.value = contentArr.join(' ');
			}
			else if (contentArr[i] == 'bitch'){
				contentArr[i] = 'bi**h';
				textArea.value = contentArr.join(' ');
			}
		}
	}
}
