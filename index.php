<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Filtro HTML</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Listado de Usuarios...</h1>
		<?php
		require 'class/users.php';
		$consultar = new Users();
		$result = $consultar->listar_u();

		?>
		<div id="resultado"></div>
		<div id="tabla">
			<table border="1">
				<form id="books" name="books" method="POST">
					<tr>
						<td></td>
						<td>
							<select name="code" id="code">
		                        <option value="">Ordenar</option>
		                        <option value="A">Ascendentemente</option>
		                        <option value="D">Descendentemente</option>
		                    </select>
		                </td>
						<td></td>
					</tr>
					<tr>
						<td>
							Id Usuario
						</td>
						<td>
							Usuario
						</td>
						<td>
							Pass
						</td>
					</tr><?php
					foreach ($result as $key => $value) {?>
						<tr>
							<td><?php echo $value['idUser'];?></td>
							<td><?php echo $value['naUser'];?></td>
							<td><?php echo $value['paUser'];?></td>
						</tr>
					<?php }
					?>
				</form>
			</table>
			<script src="js/jquery-1.11.3.min.js"></script>
        	<script src="js/filtro.js"></script>
		</div>
	</body>
</html>