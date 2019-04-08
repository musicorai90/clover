<h2>Usuarios</h2>
<a href="?to=registrar" class="agregar">+</a>
<table class="usuarios">
	<thead>
		<tr>
			<th style="width: 50px;">#</th>
			<th>Nombre</th>
			<th style="width: 100px;"></th>
		</tr>
	</thead>
	<tbody>
		<?php if ($usuarios) { foreach ($usuarios as $usuario) { ?>
			<tr>
				<td style="font-weight: 600;"><?php echo $usuario['id']; ?></td>
				<td><?php echo $usuario['nombre']; ?></td>
				<td><a class="btn verde" href="?to=ver&id=<?php echo $usuario['id'] ?>"><i class="fa fa-eye"></i></a></td>
			</tr>
		<?php } } else { ?>
			<tr>
				<td colspan="3">No hay usuarios registrados.</td>
			</tr>
		<?php } ?>
	</tbody>
</table>