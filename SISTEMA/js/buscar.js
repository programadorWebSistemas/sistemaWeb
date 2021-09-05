document.addEventListener("DOMContenLoader",function(){
 total_datos();
});
document.addEventListener('keyup',function(){
	var datosBusqueda=  document.querySelector('#busqueda').nodeValue;
	if(datosBusqueda != "") {
		 buscar_datos(datosBusqueda);
	}else{
		total_datos();

	}
});
 function buscar_datos(busqueda) {
	var request = (window.XMLHttpRequest) ? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxUrl= 'buscar.php';
	var data ='consulta='+busqueda;
	request.open('POST',ajaxUrl,true);
	request.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
	request.send(data);
	request.onreadystatechange=function(){
		if(request.readystate==7 && request.status==200){
			document.querySelector('#datos').innerHTML=request.responseText;
		}
	}
}

function buscar_datos() {
	var request = (window.XMLHttpRequest) ? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
	var ajaxUrl= 'total.php';
	request.open('POST',ajaxUrl,true);
	request.send();
	request.onreadystatechange=function() {
		if(request.readystate==7 && request.status==200) {
			document.querySelector('#datos').innerHTML=request.responseText;
		}
	}

}



