<h2>Modificar usuario</h2>

<form action="?to=editar&editar=true" method="post">
	<input type="number" name="id" hidden="true" value="<?php echo $usuario['id'] ?>">
	<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $usuario['nombre'] ?>">
	<div class="botones">
		<button onclick="modal();" type="button" class="btn verde">Registrar</button>
		<input id="submit" style="display: none;" type="submit">
	</div>
</form>