<h2>Usuario</h2>
<table class="usuario">
	<tr>
		<td class="subtitle">ID</td>
		<td class="content"><?php echo $usuario['id']; ?></td>
	</tr>
	<tr>
		<td class="subtitle">Nombre</td>
		<td class="content"><?php echo $usuario['nombre']; ?></td>
	</tr>
</table>

<div class="botones">
	<a class="btn verde" href="?to=editar&id=<?php echo $usuario['id'] ?>">Editar</a>
	<button onclick="modal();" type="button" class="btn rojo">Eliminar</button>
	<a id="submit" style="display: none;" href="?to=eliminar&id=<?php echo $usuario['id'] ?>">Eliminar</a>
</div>