/*function isEmpty(string) {
	if(string.length > 0) {
		return false;
	}
	return true;
}*/

function isWhiteSpaceOrEmpty(str){
	return /^[\s\t\r\n]*$/.test(str);
} 

/*function checkString(string, message){
	//alert("checkStringXD");
	if(isWhiteSpaceOrEmpty(string)){
		//|| isWhiteSpaceOrEmpty(string)
		alert(message);
		return false;
	}
	return true;
}*/

/*function checkEmail(str){
	let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
	if(email.test(str))
		return true;
	else{
		alert("Podaj właściwy e-mail");
		return false;
	}
} */

function setPanienskie(){
	document.getElementById("tr_nazwisko_p").style.visibility="visible";
}
function unSetPanienskie(){
	document.getElementById("tr_nazwisko_p").style.visibility="hidden";
}

function checkStringAndFocus(obj, msg){
	//alert("checkStringAndFocus!");
	let str = obj.value;
	let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
	//alert(msg);
	if(isWhiteSpaceOrEmpty(str)) {
		document.getElementById(errorFieldName).innerHTML = msg;
		//document.getElementById(errorFieldName).className = "err";
		obj.focus();
		return false;
	}else{
		document.getElementById(errorFieldName).innerHTML = "";
		return true;
	}
}

function checkEmailAndFocus(obj, msg){
	//alert("checkEmailAndFocus!");
	let str = obj.value;
	let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
	let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
	//alert(msg);
	if(!email.test(str)) {
		//alert("checkEmailAndFocus!");
		document.getElementById(errorFieldName).innerHTML = msg;
		//document.getElementById(errorFieldName).className = "err";
		obj.focus();
		return false;
	}else{
		document.getElementById(errorFieldName).innerHTML = "";
		return true;
	}
}


function validate(formek){
	var wrongForm = false;
	//alert("validateXD");
	if(checkStringAndFocus(formek.elements["f_imie"], "Podaj poprawne imie!") == false){
		wrongForm=true;
	}else if(checkStringAndFocus(formek.elements["f_nazwisko"], "Podaj poprawne nazwisko!") == false){
		wrongForm=true;
	}else if(checkEmailAndFocus(formek.elements["f_email"], "Podaj właściwy e-mail") == false){
		wrongForm=true;
	}else if(checkStringAndFocus(formek.elements["f_kod"], "Podaj poprawny kod!") == false){
		wrongForm=true;
	}else if(checkStringAndFocus(formek.elements["f_ulica"], "Podaj poprawną ulice!") == false){
		wrongForm=true;
	}else if(checkStringAndFocus(formek.elements["f_miasto"], "Podaj poprawne miasto!") == false){
		wrongForm=true;
	}
	
	if(wrongForm==true){
		//alert("nie poprawny formularz!");
		return false;
	}else{
		//alert("checkStringXD");
		return true;
	}	
}

function alterRows(i, e){
	
	if(e){
		//alert("xd");
		if(i % 2 == 1){
			//alert("xd");
			e.setAttribute("style", "background-color: Aqua;");
		}
		e = e.nextSibling;
		while(e && e.nodeType != 1){
			e = e.nextSibling;
		}
		alterRows(++i, e);
	}
}

//alert("xd");
alterRows(1, document.getElementsByTagName("tr")[0] );


function nextNode(e){
	while(e && e.nodeType != 1){
		e = e.nextSibling;
	}
	return e;
}

function prevNode(e){
	while(e && e.nodeType != 1){
		e = e.previousSibling;
	}
	return e;
}

function swapRows(b){
	//alert("swapRowsxd")
	var tab = prevNode(b.previousSibling);
	var tBody = nextNode(tab.firstChild);
	var lastNode = prevNode(tBody.lastChild);
	tBody.removeChild(lastNode);
	var firstNode = nextNode(tBody.firstChild);
	tBody.insertBefore(lastNode, firstNode);
}

function cnt(form, msg, maxSize){
	if(form.value.length > maxSize) form.value = form.value.substring(0, maxSize);
	else msg.innerHTML = maxSize -form.value.length;
}