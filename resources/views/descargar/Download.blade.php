<!DOCTYPE html>
<html>
<head>
	<title>download</title>
</head>
<body>

<?php
$directorio = opendir("uploads"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
      echo "<li><a href='uploads/".$archivo."'>".$archivo."</a></li>";
    }
}
?>

</body>
</html>