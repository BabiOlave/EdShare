<!DOCTYPE html>
<html>
<head>
<title>Popup contact form</title>

<link href="css/login-style.css" rel="stylesheet">
<script src="js/login-js.js"></script>
</head>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">

<h2>Inicia Sesión</h2>
<hr>
<input id="usuario" name="usuario" placeholder="nombre de usuario" type="text"> 
<input id="contraseña" name="contraseña" placeholder="contraseña" type="password">

<a href="javascript:%20check_empty()" id="submit">Iniciar Sesión</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->

<button id="popup" onclick="div_show()">Iniciar Sesión</button>
</body>
<!-- Body Ends Here -->
</html>