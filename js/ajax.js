// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function addContact(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  contact = document.getElementById('contact');
  phone = document.getElementById('phone');
  mail = document.getElementById('mail');
  message = document.getElementById('message');

  //instanciamos el objetoAjax
  ajax=objetoAjax();

  //uso del medoto POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "contacto.php", true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText;
  		//llamar a funcion para limpiar los inputs
		ResetFields();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a contacto.php para que inserte los datos
	ajax.send("name="+contact.value+"&phone="+phone.value+"&mail="+mail.value+"&message="+message.value);
}

//función para limpiar los campos
function ResetFields(){
  contact.value="";
  phone.value="";
  mail.value="";
  message.value="";
}
