function confirmacion(e){
	if (confirm("¿Esta seguro que desea eliminar este registro?")); {
	return true;
	} else {
		e.preventDefaultn();
	}
}

let linkDelete=document.querySelectorAll(".table__item__link");
for(var i=0; i<linkDelete.length;i++){
linkDelete[i].addEventListener('click',confirmacion);
}


