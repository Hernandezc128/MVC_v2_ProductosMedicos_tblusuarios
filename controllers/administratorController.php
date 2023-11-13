<?php
class administratorController extends Administrator
{
	function index()
	{
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function usuarios()
	{
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>idUsuario</th>
					<th>Nombre de la cuenta</th>
					<th>Fecha de creacion</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th>Foto de perfil</th>
					<th>Fecha de Nacimiento</th>
					<th>No. Tarjeta</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach (parent::get_view_users() as $data) {
					?>
					<tr>
						<td>
							<?php echo $data->idusuario; ?>
						</td>
						<td>
							<?php echo $data->nom_cuenta; ?>
						</td>
						<td>
							<?php echo $data->fecha_crea; ?>
						</td>
						<td>
							<?php echo $data->correo_us; ?>
						</td>
						<td>
							<?php echo $data->contraseña; ?>
						</td>
						<td>
							<?php echo $data->foto_perfil; ?>
						</td>
						<td>
							<?php echo $data->fecha_N; ?>
						</td>
						<td>
							<?php echo $data->no_tarjeta; ?>
						</td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Seleccionar <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="#" onclick="ModalUpdate(
											'<?php echo $data->idusuario; ?>',
											'<?php echo $data->nom_cuenta; ?>',
											'<?php echo $data->fecha_crea; ?>',
											'<?php echo $data->correo_us; ?>',
											'<?php echo $data->contraseña; ?>',
											'<?php echo $data->foto_perfil; ?>',
											'<?php echo $data->fecha_N; ?>',
											'<?php echo $data->no_tarjeta; ?>');">
											Actualizar
										</a>
									</li>
									<li>
										<a href="#" onclick="deleteUsuario('<?php echo $data->idusuario; ?>');">Borrar</a>
									</li>
								</ul>
							</div>

						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		<?php
	}

	function deleteUsuario()
	{
		if (isset($_REQUEST['idusuario'])) {
			parent::set_delete_user($_REQUEST['idusuario']);
		}
	}

	function registerUsuario()
	{
		$data = array(
			'idusuario ' => $_REQUEST['idusuario'],
			'nom_cuenta' => $_REQUEST['nom_cuenta'],
			'fecha_crea' => $_REQUEST['fecha_crea'],
			'correo_us' => $_REQUEST['correo_us'],
			'contraseña' => $_REQUEST['contraseña'],
			'foto_perfil' => $_REQUEST['foto_perfil'],
			'fecha_N' => $_REQUEST['fecha_N'],
			'no_tarjeta' => $_REQUEST['no_tarjeta']
		);

		parent::set_register_user($data);
	}

	function updateUsuario()
	{
		$data = array(
			'idusuario' => $_REQUEST['idusuario'],
			'nom_cuenta' => $_REQUEST['nom_cuenta'],
			'fecha_crea' => $_REQUEST['fecha_crea'],
			'correo_us' => $_REQUEST['correo_us'],
			'contraseña' => $_REQUEST['contraseña'],
			'foto_perfil' => $_REQUEST['foto_perfil'],
			'fecha_N' => $_REQUEST['fecha_N'],
			'no_tarjeta' => $_REQUEST['no_tarjeta']
		);

		parent::set_update_user($data);
	}
}
