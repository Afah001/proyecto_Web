<!DOCTYPE html>
<html>
<head>
	<title>Registrate</title>
	<link rel="stylesheet" type="text/css" href="css/nav_index.css">
	<link rel="stylesheet" type="text/css" href="css/style_regist.css">
</head>
<body>
	
	<?php include "sections/nav_index.php";	// nav ?>


	<section>


		 <form id="inicioSesion"> <!--form inicio de sesion-->

            <p>Correo</p><input><br>
            <p>Contraseña</p><input><br><br>
            <input type="submit" value="Iniciar Sesion" id="boton_iniciar">

        </form>

		<form id="registro">	<!--form de registro-->

			<fieldset>

				<legend>Datos de Usuario</legend><br>

				Nombre:	<input type="text" class="input_text"><br><br>
				Apellido:	<input type="text" class="input_text"><br><br>
				Edad: <input tpye="text" class="input_text"><br><br>
				Correo: <input type="text" class="input_text"><br><br>
				Constraseña: <input type="password" class="input_text"><br><br><br>
				<input type="submit" value="Registrar" id="boton_registrar">

			</fieldset>

		</form><br>

	</section>



</body>
</html>