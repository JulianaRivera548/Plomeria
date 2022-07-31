<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
	crossorigin="anonymous">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
	crossorigin="anonymous"></script>
</head>
<body style="min-height: 100vw;">

	<nav class="navbar bg-dark navbar-dark">
		<div class="container-fluid justify-content-center">
			<a class="navbar-brand " href="index.html"> <img
				src="imagenes/logo.png" alt="" width="50"
				class="d-inline-block align-text-center">Plomeros
			</a>
		</div>
	</nav>
	<br>
	<div class="card">
		<div class="card-body" style="display: inline-flex;">
			<div class="d-flex flex-column" style="width: 70vw;">
				<textarea readonly cols="130" rows="5"
					placeholder="Detalle del daño"></textarea>
				<input type="text" value="valor a pagar: 0$"
					style="text-align: center; color: white;" class="bg-dark" disabled>
			</div>
			<div style="align-self: center; width: 20vw;">
				<center>
					<button type="button" class="btn btn-dark"
						style="text-align: center;" disabled>Pagar</button>
				</center>
			</div>
		</div>
	</div>
	<div class="card bg-dark" style="color: white;">
		<div class="container-fluid"
			style="text-align: center; vertical-align: middle; margin: 10px;">
			<a href="agregar_pedido.html" class="navbar-brand"> <img
				src="imagenes/mas.png" width="32px"
				class="d-inline-block align-text-center"
				style="filter: invert(100%); align-self: center;">&nbsp; Agendar
				nueva cita
			</a>
		</div>
	</div>
</body>
</html>