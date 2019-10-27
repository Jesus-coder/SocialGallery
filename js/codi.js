function validacion(){
	//trae elemento nombre
	var username = document.getElementById('username').value;
	//trae elemento email
	var password = document.getElementById('password').value;
	if (username =='' && password == '') {
	document.getElementById('mensaje').innerHTML = 'Los campos estan vacios. Rellenalos.';
	document.getElementById('mensaje').style.display = 'block';
	document.getElementById('username').style.border = '1px solid red';
	document.getElementById('password').style.border = '1px solid red';
	return false;
	} else if (username==''){
		document.getElementById('mensajenom').innerHTML = 'El campo usuario esta vacio. Rellenalo.';
		document.getElementById('mensajenom').style.display = 'block';
		document.getElementById('mensajemail').style.display = 'none';
		document.getElementById('mensaje').style.display = 'none';
		document.getElementById('username').style.border = '1px solid red';
		document.getElementById('password').style.border = '1px solid #ccc';
		return false;
	}else if (password =='') {
		document.getElementById('mensajemail').innerHTML = 'Los campo contraseña esta vacio. Rellenalo.';
		document.getElementById('mensajemail').style.display = 'block';
		document.getElementById('mensajenom').style.display = 'none';
		document.getElementById('mensaje').style.display = 'none';
		document.getElementById('password').style.border = '1px solid red';
		document.getElementById('username').style.border = '1px solid #ccc';
		return false;

	} else {
		return true;
	}
}

function formGaleria(){
	//trae elemento nombre
	var titulo = document.getElementById('nombre_imagen').value;
	//trae elemento email
	var archivo = document.getElementById('file').value;
	if (titulo =='' && archivo == '') {
	document.getElementById('mensajeg').innerHTML = 'No has introducido el título ni la imagen';
	document.getElementById('mensajeg').style.display = 'block';
	document.getElementById('mensajefile').style.display = 'none';
	document.getElementById('mensajetitulo').style.display = 'none';
	document.getElementById('nombre_imagen').style.border = '1px solid red';
	document.getElementById('file').style.border = '1px solid red';
	return false;
	} else if (titulo==''){
		document.getElementById('mensajetitulo').innerHTML = 'El campo título está vacio. Rellenalo.';
		document.getElementById('mensajetitulo').style.display = 'block';
		document.getElementById('mensajefile').style.display = 'none';
		document.getElementById('mensajeg').style.display = 'none';
		document.getElementById('nombre_imagen').style.border = '1px solid red';
		document.getElementById('file').style.border = '1px solid #ccc';
		return false;
	}else if (archivo =='') {
		document.getElementById('mensajefile').innerHTML = 'No has seleccionado el archivo.';
		document.getElementById('mensajefile').style.display = 'block';
		document.getElementById('mensajetitulo').style.display = 'none';
		document.getElementById('mensajeg').style.display = 'none';
		document.getElementById('file').style.border = '1px solid red';
		document.getElementById('nombre_imagen').style.border = '1px solid #ccc';
		return false;

	} else {
		return true;
	}
}