<div id="addUser" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Agregar nuevo Usuario</h4>
			</div>
			<div class="modal-body">
				<form name="formUser" onsubmit="register(); return false">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="idusuario" type="number" class="form-control" name="idusuario" placeholder="Generado automaticamente"
							required autocomplete="off" disabled>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="nom_cuenta" type="text" class="form-control" name="nom_cuenta"
							placeholder="Nombre de la cuenta" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fecha_crea" type="date" class="form-control" name="fecha_crea" placeholder="Fecha de creacion" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="correo_us" type="email" class="form-control" name="correo_us" placeholder="Correo" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="contraseña" type="text" class="form-control" name="contraseña" placeholder="Contraseña" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="foto_perfil" type="text" class="form-control" name="foto_perfil" placeholder="Foto de Perfil"
							required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fecha_N" type="date" class="form-control" name="fecha_N"
							placeholder="Fecha de Nacimiento" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="no_tarjeta" type="text" class="form-control" name="no_tarjeta"
							placeholder="No. Tarjeta" required autocomplete="off">
					</div>
					<br>
					
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Registrar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="updateUsuario" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Actualizar informacion del Usuario</h4>
			</div>
			<div class="modal-body">
				<form name="formUserUpdate" onsubmit="update(); return false">
					<input type="text" name="idusuario" id="idusuario" style="display: none;">

					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="nom_cuenta" type="text" class="form-control" name="nom_cuenta" placeholder="Nombre de la cuenta" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fecha_crea" type="text" class="form-control" name="fecha_crea" placeholder="Fecha de creacion" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="correo_us" type="email" class="form-control" name="correo_us" placeholder="Correo" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="contraseña" type="text" class="form-control" name="contraseña" placeholder="Contraseña"
							required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="foto_perfil" type="text" class="form-control" name="foto_perfil"
							placeholder="Foto de Perfil" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fecha_N" type="text" class="form-control" name="fecha_N"
							placeholder="Fecha de Nacimiento" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="no_tarjeta" type="number" class="form-control" name="no_tarjeta"
							placeholder="No. Tarjeta" required autocomplete="off">
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Actualizar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
				</form>
			</div>
		</div>
	</div>
</div>