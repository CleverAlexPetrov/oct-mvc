//document.getElementById('courses').onclick = function () {
//    var xhr = new XMLHttpRequest();
//    xhr.open('GET', 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
//    xhr.onreadystatechange = function () {
//	if (xhr.readyState === 4) {
//	    if (xhr.status === 200) {
//		var json_text = xhr.responseText;
//		var courses = JSON.parse(json_text);
//		for (var i = 0; i < courses.length; i++) {
//		    alert(courses[i].ccy);//TODO выводи как хочешь
//		}
//	    }
//	}
//    };
//    xhr.send();
//};

function showQqestions() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/questions');
    xhr.onreadystatechange = function () {
	if (xhr.readyState === 4) {
	    if (xhr.status === 200) {
		var json_text = xhr.responseText;
		var questions = JSON.parse(json_text);
		var tbody = document.querySelector('#questions tbody');
		tbody.innerHTML = '';
		for (var i = 0; i < questions.length; i++) {
		    var tr = '<tr>\n\
<td>' + (i + 1) + '</td>\n\
<td>' + questions[i].author + '</td>\n\
<td>' + questions[i].text + '</td>\n\
</tr>';
		    tbody.innerHTML += tr;
		}
	    } else {
		return false;
	    }
	}
    };
    xhr.send();
};

showQqestions();

function sendQuestion(author, text){
    var post_data = 'author=' + author + '&text=' + text;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/addquestion');
    xhr.onreadystatechange = function () {
	if (xhr.readyState === 4) {
	    if (xhr.status === 200) {
		showQqestions();
	    }
	}
    };
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.send(post_data);
}

document.forms.question.onsubmit = function (event) {
    var form_elements = this.elements;
    var author = form_elements.author.value;
    //form_elements.author.value = '';
    var text = form_elements.text.value;
    //form_elements.text.value = '';
    this.reset(); 
    sendQuestion(author, text);
    event.preventDefault();
};