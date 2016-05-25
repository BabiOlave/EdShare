<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="css/main.css" />
		
</head>
<body>
<div class="top-nav">
      <div class="container">
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="button alt">Inicio</a></li>
        <li><a href="#" class="button alt">Quienes somos</a></li>
        <li><a href="#" class="button alt">Mi cuenta</a></li>
        <li><a href="#" class="button alt">Guardado</a></li>
        <li><a href="#" class="button alt">Contacto</a></li>
        </ul>
        
        </div>
        </div>
        </div>

<section id="two" class="wrapper style2 special">
<div class="inner narrow">
					<header>
						<h2>REGISTRATE</h2>
					</header>
					<form class="grid-form" method="post" action="#">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<div class="form-control narrow">
							<label for="name">Nombre</label>
							<input name="name" id="name" type="text">
						
						</div>
						<div class="form-control narrow">
						<label for="apellido">Apellido
						</label>
						<input name="apellido" id="apellido" type="text">
							
						</div>
						
						<div class="form-control narrow">
							<label for="email">Email</label>
							<input name="email" id="email" type="email">
						</div>
						<div class="form-control narrow">
						<label for="name">Contraseña</label>
						<input name="contraseña" id="contraseña" type="password">
						</div>


						<ul class="actions">
							<li><input value="Registrarte" type="submit"></li>
						</ul>
					</form>
				</div>
				</section>
</body>
</html>