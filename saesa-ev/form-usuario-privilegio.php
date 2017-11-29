<html>
<head>
	<title>Registro de sección</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<?php include "navbar.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Registro de nueva sección</h2>

				<div class="modal-body">
					<form role="form" method="post" action="php/seccion.php">

                        <div class="form-group">
							<label for="id">Codigo Sección</label>
							<input type="text" class="form-control" name="id" required>
						</div>


                        <div class="form-group">
							<label for="nombre_seccion">Nombre sección</label>
							<input type="text" class="form-control" name="nombre_seccion" required>
						</div>

						<button type="submit" class="btn btn-default">Guardar</button>
					</form>
				</div>

			</div>
		</div>
	</div>

	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>