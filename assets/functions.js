function objectAjax() {
	var xmlhttp = false;
	try {
	  xmlhttp = new XMLHttpRequest();
	} catch (e) {
	  try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	  } catch (E) {
		xmlhttp = false;
	  }
	}
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
  }
  
  addEventListener('load', read, false);
  
  function read() {
	$.ajax({
	  type: 'POST',
	  url: '?c=administrator&m=usuarios',
	  beforeSend: function () {
		$("#information").html("Procesando, espere por favor...");
	  },
	  success: function (response) {
		$("#information").html(response);
	  }
	});
  }
  
  function register() {
	idusuario = document.formUser.idusuario.value;
	nom_cuenta = document.formUser.nom_cuenta.value;
	fecha_crea = document.formUser.fecha_crea.value;
	correo_us = document.formUser.correo_us.value;
	contraseña = document.formUser.contraseña.value;
	foto_perfil = document.formUser.foto_perfil.value;
	fecha_N = document.formUser.fecha_N.value;
	no_tarjeta = document.formUser.no_tarjeta.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registerUsuario", true);
	ajax.onreadystatechange = function () {
	  if (ajax.readyState == 4) {
		if (ajax.status == 200) {
		  read();
		  alert('Los datos se guardaron correctamente.');
		  $('#addUser').modal('hide');
		}
	  }
	};
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(
	  "idusuario=" + idusuario +
	  "&nom_cuenta=" + nom_cuenta +
	  "&fecha_crea=" + fecha_crea +
	  "&correo_us=" + correo_us +
	  "&contraseña=" + contraseña +
	  "&foto_perfil=" + foto_perfil +
	  "&fecha_N=" + fecha_N +
	  "&no_tarjeta=" + no_tarjeta
	);
  }
  
  function update() {
	idusuario = document.formUserUpdate.idusuario.value;
	nom_cuenta = document.formUserUpdate.nom_cuenta.value;
	fecha_crea = document.formUserUpdate.fecha_crea.value;
	correo_us = document.formUserUpdate.correo_us.value;
	contraseña = document.formUserUpdate.contraseña.value;
	foto_perfil = document.formUserUpdate.foto_perfil.value;
	fecha_N = document.formUserUpdate.fecha_N.value;
	no_tarjeta = document.formUserUpdate.no_tarjeta.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateUsuario", true);
	ajax.onreadystatechange = function () {
	  if (ajax.readyState == 4) {
		if (ajax.status == 200) {
		  read(); // Leer los datos actualizados
		  $('#updateUsuario').modal('hide'); // Cerrar la ventana modal de actualización
		}
	  }
	};
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(
	  "idusuario=" + idusuario +
	  "&nom_cuenta=" + nom_cuenta +
	  "&fecha_crea=" + fecha_crea +
	  "&correo_us=" + correo_us +
	  "&contraseña=" + contraseña +
	  "&foto_perfil=" + foto_perfil +
	  "&fecha_N=" + fecha_N +
	  "&no_tarjeta=" + no_tarjeta
	);
  }
  
  function deleteUsuario(idusuario) {
	if (confirm('¿Está seguro de eliminar este registro?')) {
	  ajax = objectAjax();
	  ajax.open("POST", "?c=administrator&m=deleteUsuario", true);
	  ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
		  if (ajax.status == 200) {
			read();
		  }
		}
	  };
	  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  ajax.send("idusuario=" + idusuario);
	}
  }
  
  function ModalRegister() {
	$('#addUser').modal('show');
  }
  
  function ModalUpdate(idusuario, nom_cuenta, fecha_crea, correo_us, contraseña, foto_perfil, fecha_N, no_tarjeta) {
	document.formUserUpdate.idusuario.value = idusuario;
	document.formUserUpdate.nom_cuenta.value = nom_cuenta;
	document.formUserUpdate.fecha_crea.value = fecha_crea;
	document.formUserUpdate.correo_us.value = correo_us;
	document.formUserUpdate.contraseña.value = contraseña;
	document.formUserUpdate.foto_perfil.value = foto_perfil;
	document.formUserUpdate.fecha_N.value = fecha_N;
	document.formUserUpdate.no_tarjeta.value = no_tarjeta;
	$('#updateUsuario').modal('show');
  }
  