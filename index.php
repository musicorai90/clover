<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Statics/fontawesome/css/all.css">
	<link rel="stylesheet" href="Statics/css/styles.css">
	<title>Clover</title>
</head>
<body>
	<header>
		<h1>Clover</h1>
	</header>
	<main>
		<?php
			require_once('Controllers/routes.php');
		?>
	</main>
	<footer>
		<p>Desarrollado por Raimon José Guanay Martinez - raimong79@gmail.com</p>
	</footer>

	<div class="modal" id="modal">
		<div>
			<h4>¿Estas seguro?</h4>
			<div>
				<button class="btn verde" onclick="aceptar(true);">Si</button>
				<button class="btn rojo" onclick="aceptar(false);" class="no">No</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function modal() {
			document.getElementById('modal').style.top = "0";
		}

		function aceptar(res) {
			if (res) {
				document.getElementById('submit').click();
				document.getElementById('modal').style.top = "-100%";
			} else {
				document.getElementById('modal').style.top = "-100%";
			}
		}
	</script>
</body>
</html>