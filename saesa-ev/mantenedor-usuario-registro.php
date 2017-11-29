<html>
<head>
	<title>Registro de usuarios</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<?php include "navbar.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Registro de nuevo usuario</h2>

				<div class="modal-body">
					<form role="form" method="post" action="php/agregar.php">
                    <!--
                    	<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" required>
						</div>
						<div class="form-group">
							<label for="apellido">Apellido</label>
							<input type="text" class="form-control" name="apellido" required>
						</div>
						<div class="form-group">
							<label for="seccion">Seccion</label>
							<input type="text" class="form-control" name="seccion" required>
						</div>
-->
                        <div class="form-group">
							<label for="user_login">Nombre usuario</label>
							<input type="text" class="form-control" name="user_login" required>
						</div>

                        <div class="form-group">
							<label for="user_rut">Rut</label>
							<input type="text" class="form-control" name="user_rut" required>
						</div>

                        <div class="form-group">
							<label for="user_pass">Contraseña</label>
							<input type="text" class="form-control" name="user_pass" required>
						</div>

                        <div class="form-group">
							<label for="user_email">Correo electrónico</label>
							<input type="text" class="form-control" name="user_email" required>
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